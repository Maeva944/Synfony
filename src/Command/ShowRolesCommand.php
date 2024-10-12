<?php

namespace App\Command;

use App\Entity\Roles;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowRolesCommand extends Command
{
    protected static $defaultName = 'app:show-roles';

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        // Récupérer tous les rôles
        $roles = $this->entityManager->getRepository(Roles::class)->findAll();

        // Afficher les rôles
        foreach ($roles as $role) {
            $output->writeln(sprintf('ID: %d, Nom: %s', $role->getId(), $role->getNomRoles()));
        }

        return Command::SUCCESS;
    }
}

?>