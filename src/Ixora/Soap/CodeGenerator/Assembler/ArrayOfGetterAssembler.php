<?php

namespace Ixora\Soap\CodeGenerator\Assembler;

use Phpro\SoapClient\CodeGenerator\Assembler\AssemblerInterface;
use Phpro\SoapClient\CodeGenerator\Context\ContextInterface;
use Phpro\SoapClient\CodeGenerator\Context\PropertyContext;
use Phpro\SoapClient\CodeGenerator\Model\Property;
use Phpro\SoapClient\CodeGenerator\Util\Normalizer;
use Phpro\SoapClient\Exception\AssemblerException;
use Phpro\SoapClient\CodeGenerator\Assembler\GetterAssemblerOptions;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\MethodGenerator;


class ArrayOfGetterAssembler implements AssemblerInterface
{
	/**
	 * @var GetterAssemblerOptions
	 */
	private $options;

	/**
	 * GetterAssembler constructor.
	 *
	 * @param GetterAssemblerOptions $options
	 */
	public function __construct(GetterAssemblerOptions $options)
	{
		$this->options = $options;
	}

	/**
	 * {@inheritdoc}
	 */
	public function canAssemble(ContextInterface $context): bool
	{
		return $context instanceof PropertyContext;
	}

	/**
	 * @param ContextInterface|PropertyContext $context
	 *
	 * @throws AssemblerException
	 */
    public function assemble(ContextInterface $context)
    {
        $class = $context->getClass();
        $property = $context->getProperty();
        try {
            $prefix = $this->getPrefix($property);
            $methodName = Normalizer::generatePropertyMethod($prefix, $property->getName());
            $class->removeMethod($methodName);
            $class->addMethodFromGenerator(
                MethodGenerator::fromArray([
                    'name'       => $methodName,
                    'parameters' => [],
                    'visibility' => MethodGenerator::VISIBILITY_PUBLIC,
                    'body'       => sprintf('return $this->%s;', $property->getName()),
                    'returntype' => $this->options->useReturnType() ? 'array' : null,
                    'docblock'   => DocBlockGenerator::fromArray([
                        'tags' => [
                            [
                                'name'        => 'return',
                                'description' => str_replace('\\', '', $property->getType()) . '[]',
                            ],
                        ],
                    ]),
                ])
            );
        } catch (\Exception $e) {
            throw AssemblerException::fromException($e);
        }
    }

	/**
	 * @param Property $property
	 * @return string
	 */
	public function getPrefix(Property $property): string
	{
		if (!$this->options->useBoolGetters()) {
			return 'get';
		}

		return $property->getType() === 'bool' ? 'is' : 'get';
	}
}
