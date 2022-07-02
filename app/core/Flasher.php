<?php

  class Flasher {
    public static function setFlash($message, $action, $type)
    {
      $_SESSION['flash'] = [
        'message' => $message,
        'action' => $action,
        'type' => $type
      ];
    }

    public static function flash()
    {
      if( isset($_SESSION['flash']) ) {
        echo '
          <div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['flash']['action'] . '</strong> ' . $_SESSION['flash']['message'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        ';

        unset($_SESSION['flash']);
      }
    }

    public static function flashMustUploadPict()
    {
      echo '
        <div class="alert alert-' . $_SESSION['flash']['type'] . ' d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div> ' .
            $_SESSION['flash']['action'] . '' . $_SESSION['flash']['message'] . '
          </div>
        </div>
      ';
    }

    public static function flashCheckUploadPict()
    {
      echo '
        <div class="alert alert-' . $_SESSION['flash']['type'] . ' d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div> ' .
            $_SESSION['flash']['action'] . '' . $_SESSION['flash']['message'] . '
          </div>
        </div>
      ';
    }

    public static function flashSizeUploadPict()
    {
      echo '
        <div class="alert alert-' . $_SESSION['flash']['type'] . ' d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div> ' .
            $_SESSION['flash']['action'] . '' . $_SESSION['flash']['message'] . '
          </div>
        </div>
      ';
    }
  }