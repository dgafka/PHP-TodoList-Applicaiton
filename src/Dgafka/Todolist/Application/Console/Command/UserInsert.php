<?php

namespace Dgafka\Todolist\Application\Console\Command;

use Dgafka\Todolist\Application\Persistent\Mongo;
use Dgafka\Todolist\Application\Persistent\Repository\UserRepository;
use Dgafka\Todolist\Business\Domain\DTO\RequestUser;
use Dgafka\Todolist\Business\Domain\Service\User\Command\Insert;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;


class UserInsert  extends Command {

	protected function configure()
	{
		$this
			->setName('user:insert')
			->setDescription('Greet someone')
			->addArgument(
				'name',
				InputArgument::OPTIONAL,
				'Who do you want to greet?'
			)
			->addOption(
				'yell',
				null,
				InputOption::VALUE_NONE,
				'If set, the task will yell in uppercase letters'
			)
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output)
	{

		//Przygotowanie requesta dla usera
		$request = new RequestUser();
		$request->setName('testowa nazwa');
		$request->setEmail('super@mail.com');
		$request->setPassword('dupa');

		//Utworzenia documenta managera
		$mongo = new Mongo();
		//Zapodanie document managera do mongo
		$repository = new UserRepository($mongo->dm);
		//utworzenie komendy przekazania repozytorium
		$insertUserCommand = new Insert($repository);

		//uruchomienie komendy
		$user = $insertUserCommand->execute($request);
		var_dump($user);
	}

} 