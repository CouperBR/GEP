<?php
namespace App\Services;

class UserService{

    protected $userRepository;

    public function __construct(UserRepositoryInterface $_userRepository){
        $this->userRepository = $_userRepository;
    }

    public function create($user){
        $this->userRepository->create($user);
    }

}