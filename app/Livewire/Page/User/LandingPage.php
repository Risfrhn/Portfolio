<?php

namespace App\Livewire\Page\User;

use Livewire\Component;
use App\Service\Project_Service;
use App\Repository\Project_Repository;
use App\Service\Landing_Service;
use App\Service\Sertifikat_Service;
use App\Repository\Sertifikat_Repository;
use App\Service\Experience_Service;
use App\Repository\Experience_Repository;

class LandingPage extends Component
{
    // service & repo
    private Project_Service $service;
    private Project_Repository $repo;
    private Landing_Service $serviceLanding;
    private Landing_Repository $repoLanding;
    private Sertifikat_Service $serviceSertifikat;
    private Sertifikat_Repository $repoSertifikat;
    private Experience_Service $serviceExperience;
    private Experience_Repository $repoExperience;

    public function boot(Project_Service $service, Project_Repository $repo, Landing_Service $serviceLanding, Sertifikat_Service $serviceSertifikat, Sertifikat_Repository $repoSertifikat, Experience_Service $serviceExperience, Experience_Repository $repoExperience)
    {
        $this->service = $service;
        $this->repo = $repo;
        $this->serviceLanding = $serviceLanding;
        $this->serviceSertifikat = $serviceSertifikat;
        $this->repoSertifikat = $repoSertifikat;
        $this->serviceExperience = $serviceExperience;
        $this->repoExperience = $repoExperience;
    }

    // data
    public $dataLanding;
    public $dataPortfolio;
    public $dataProduct;
    public $dataSertifikat;
    public $dataExperience;

    public function mount(){
       $this->dataLanding = $this->serviceLanding->getDataLanding();    
       $this->dataPortfolio = $this->service->getData('portfolio')['data'];
       $this->dataProduct = $this->service->getData('product')['data'];
       $this->dataSertifikat = $this->serviceSertifikat->getData()['data'];
       $this->dataExperience = $this->serviceExperience->getData()['data'];
    }

    public function render()
    {
        return view('livewire.page.user.landing_page')->layout('layouts.app');
    }
}
