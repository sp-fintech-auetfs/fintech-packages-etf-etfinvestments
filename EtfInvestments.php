<?php

namespace Apps\Fintech\Packages\Etf\Investments;

use Apps\Fintech\Packages\Etf\Investments\Model\AppsFintechEtfInvestments;
use System\Base\BasePackage;

class EtfInvestments extends BasePackage
{
    protected $modelToUse = AppsFintechEtfInvestments::class;

    protected $packageName = 'etftransactions';

    public $etfinvestments;

    public function getEtfInvestmentsById($id)
    {
        $etfinvestments = $this->getById($id);

        if ($etfinvestments) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addEtfInvestments($data)
    {
        //
    }

    public function updateEtfInvestments($data)
    {
        $etfinvestments = $this->getById($id);

        if ($etfinvestments) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeEtfInvestments($data)
    {
        $etfinvestments = $this->getById($id);

        if ($etfinvestments) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}