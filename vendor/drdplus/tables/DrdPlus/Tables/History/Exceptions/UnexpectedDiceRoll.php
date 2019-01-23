<?php
declare(strict_types=1); // on PHP 7+ are standard PHP methods strict to types of given parameters

namespace DrdPlus\Tables\History\Exceptions;

use DrdPlus\Tables\Partials\Exceptions\RequiredDataNotFound;

class UnexpectedDiceRoll extends RequiredDataNotFound implements Logic
{

}