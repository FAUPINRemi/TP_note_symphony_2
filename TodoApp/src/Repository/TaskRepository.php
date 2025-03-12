class TaskRepository extends ServiceEntityRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Task::class);
    }

    // Add custom methods for querying the Task entity here
}