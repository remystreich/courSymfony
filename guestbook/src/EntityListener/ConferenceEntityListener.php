<?php
namespace App\EntityListener;
use App\Entity\Conference;
use Symfony\Component\String\Slugger\SluggerInterface;
use Doctrine\ORM\Events;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;

#[AsEntityListener(event: Events::prePersist, entity: Conference::class)]
#[AsEntityListener(event: Events::preUpdate, entity: Conference::class)]
class ConferenceEntityListener
{
    public function __construct(private SluggerInterface $slugger) { }
    public function __invoke(Conference $conference)
    {
        $conference->computeSlug($this->slugger);
    }
}