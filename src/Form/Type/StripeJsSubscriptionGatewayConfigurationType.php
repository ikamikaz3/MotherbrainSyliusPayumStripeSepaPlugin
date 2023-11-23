<?php

declare(strict_types=1);

namespace Motherbrain\SyliusPayumStripeSubscriptionPlugin\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

final class StripeJsSubscriptionGatewayConfigurationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('publishable_key', TextType::class, [
                'label' => 'motherbrain_sylius_payum_stripe_subscription_plugin.form.gateway_configuration.stripe_js_subscription.publishable_key'
            ])
            ->add('secret_key', TextType::class, [
                'label' => 'motherbrain_sylius_payum_stripe_subscription_plugin.form.gateway_configuration.stripe_js_subscription.secret_key'
            ])
            ->add('webhook_secret_keys', CollectionType::class, [
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'label' => 'motherbrain_sylius_payum_stripe_subscription_plugin.form.gateway_configuration.stripe_js_subscription.webhook_secret_keys',
                'constraints' => [
                    new NotBlank([
                        'groups' => 'sylius',
                    ]),
                ],
            ]);
    }
}
