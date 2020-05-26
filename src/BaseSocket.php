<?php

namespace Marchenko;

class BaseSocket {

  protected $pathSocket;
  protected $socket;

  function __destruct() {
    socket_shutdown($this->socket, 2);
    socket_close($this->socket);
  }
}
