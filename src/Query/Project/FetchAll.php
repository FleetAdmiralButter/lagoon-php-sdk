<?php

namespace Lagoon\Query\Project;

use Lagoon\Query\LagoonQueryBase;

/**
 * Fetch all projects from Lagoon.
 */
class FetchAll extends LagoonQueryBase {

  /**
   * {@inheritdoc}
   */
  protected function validate(array $variables = []) {
    return true;
  }

  /**
   * {@inheritdoc}
   */
  protected function query() {
    return <<<'QUERY'
{
  allProjects {
    id
    name
    customer { id }
    gitUrl
  }
}
QUERY;
  }
}
