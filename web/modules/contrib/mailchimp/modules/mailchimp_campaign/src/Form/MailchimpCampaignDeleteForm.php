<?php

namespace Drupal\mailchimp_campaign\Form;

use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Form controller for the MailchimpCampaign entity delete form.
 *
 * @ingroup mailchimp_campaign
 */
class MailchimpCampaignDeleteForm extends EntityConfirmFormBase {

  /**
   * The messenger service.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;

  /**
   * Constructs a MailchimpCampaignDeleteForm object.
   *
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger service.
   */
  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to delete %name?',
      ['%name' => $this->entity->label()]);
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
    return $this->t('This action will delete both the Mailchimp campaign and Drupal entity and cannot be undone.');
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
    return new Url('mailchimp_campaign.overview');
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return $this->t('Delete');
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    if (mailchimp_campaign_delete_campaign($this->entity)) {
      $this->messenger->addStatus($this->t('Mailchimp Campaign %label has been deleted.', ['%label' => $this->entity->label()]));
    }

    $form_state->setRedirectUrl($this->getCancelUrl());
  }

  /**
   * {@inheritdoc}
   *
   * // @todo Make sure override afterBuild is the correct solution.
   *
   * Have to disable EntityForm::afterbuild for this form.
   * Drupal was attempting to get a field definition for the submit button
   * from the MailchimpCampaign entity, which doesn't (and shouldn't) have it.
   */
  public function afterBuild(array $element, FormStateInterface $form_state) {
    return $element;
  }

}
