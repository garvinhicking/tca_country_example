<?php

declare(strict_types=1);

namespace GarvinHicking\TcaCountryExample\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use GarvinHicking\TcaCountryExample\Domain\Model\License;
use GarvinHicking\TcaCountryExample\Domain\Repository\LicenseRepository;

final class LicenseController extends ActionController
{
    public function __construct(
        private readonly LicenseRepository $licenseRepository,
    ) {
    }

    public function listAction(): ResponseInterface
    {
        $this->view->assign('licenses', $this->licenseRepository->findAll());

        return $this->htmlResponse();
    }

    public function singleAction(License $license): ResponseInterface
    {
        $this->view->assign('license', $license);
        return $this->htmlResponse();
    }

    public function newAction(?License $license = null): ResponseInterface
    {
        return $this->htmlResponse();
    }

    public function editAction(License $license): ResponseInterface
    {
        $this->view->assign('license', $license);
        return $this->htmlResponse();
    }

    public function createAction(License $license): ResponseInterface
    {
        $this->licenseRepository->add($license);
        return $this->htmlResponse();
    }

    public function updateAction(License $license): ResponseInterface
    {
        $this->licenseRepository->update($license);
        return $this->htmlResponse();
    }
}
