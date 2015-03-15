<?php

namespace CSP\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CSPUserBundle extends Bundle
{
	public function getParent()
  {
    return 'FOSUserBundle';
  }
}
