<?php

declare(strict_types=1);

namespace Motherbrain\SyliusPayumStripeSepaPlugin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

final class StripeJsSepaGatewayConfigurationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('publishable_key', TextType::class)
            ->add('publishable_key', TextType::class)
            ->add('webhook_secret_keys', CollectionType::class, [
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'label' => 'webhook_secret_keys',
                'constraints' => [
                    new NotBlank([
                        'message' => '',
                        'groups' => 'sylius',
                    ]),
                ],
            ]);
    }
}
