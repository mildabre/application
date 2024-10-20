<?php

/**
 * Test: Nette\Application\UI\Presenter::getPersistentComponents
 */

declare(strict_types=1);

use Nette\Application\Attributes\Persistent;
use Nette\Application\UI\Presenter;
use Tester\Assert;


require __DIR__ . '/../bootstrap.php';


class OnePresenter extends Presenter
{
}


#[Persistent('a', 'b')]
class TwoPresenter extends Presenter
{
}


Assert::same([], OnePresenter::getPersistentComponents());

Assert::same(['a', 'b'], TwoPresenter::getPersistentComponents());
