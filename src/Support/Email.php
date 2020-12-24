<?php

namespace Source\Support;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use stdClass;

/**
 * Class Email
 * @package Source\Support
 */
class Email
{
  /** @var PHPMailer */
  private $mail;

  /** @var stdClass */
  private $data;

  /** @var Exception|null */
  private $error;

  /** Email constructor. */
  public function __construct()
  {
    $this->mail = new PHPMailer(true);
    $this->data = new stdClass();

    $this->mail->isSMTP();
    $this->mail->isHTML();
    $this->mail->setLanguage("br");

    $this->mail->SMTPAuth = true;
    $this->mail->SMTPSecure = "tls";
    $this->mail->CharSet = "utf-8";

    $this->mail->Host = MAIL["host"];
    $this->mail->Port = MAIL["port"];
    $this->mail->Username = MAIL["user"];
    $this->mail->Password = MAIL["passwd"];
  }

  /**
   * @param string $subject
   * @param string $body
   * @param string $recipient_name
   * @param string $recipient_email
   * @return $this
   */
  public function add(string $subject, string $body, string $recipient_name, string $recipient_email): Email
  {
    $this->data->subject = $subject;
    $this->data->body = $body;
    $this->data->recipient_name = $recipient_name;
    $this->data->recipient_email = $recipient_email;
    return $this;
  }

  /**
   * @param string $filePath
   * @param string $fileName
   * @return $this
   */
  public function attach(string $filePath, string $fileName): Email
  {
    $this->data->attach[$filePath] = $fileName;
    return $this;
  }

  /**
   * @param mixed|string $from_name
   * @param mixed|string $from_email
   * @return bool
   */
  public function send(string $from_name = MAIL["from_name"], string $from_email = MAIL["from_email"]): bool
  {
    try {
      $this->mail->Subject = $this->data->subject;
      $this->mail->msgHTML($this->data->body);
      $this->mail->addAddress($this->data->recipient_email, $this->data->recipient_name);
      $this->mail->setFrom($from_email, $from_name);

      if (!empty($this->data->attach)) {
        foreach ($this->data->attach as $path => $name) {
          $this->mail->addAttachment($path, $name);
        }
      }

      $this->mail->send();
      return true;
    } catch (Exception $exception) {
      $this->error = $exception;
      return false;
    }
  }

  /** @return Exception|null */
  public function error(): ?Exception
  {
    return $this->error;
  }
}
