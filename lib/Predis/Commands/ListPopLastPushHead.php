<?php

namespace Predis\Commands;

use Predis\Command;

class ListPopLastPushHead extends Command {
    public function getCommandId() { return 'RPOPLPUSH'; }
}