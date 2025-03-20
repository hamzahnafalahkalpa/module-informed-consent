<?php

namespace Hanafalah\ModuleInformedConsent\Seeders;

use Hanafalah\ModuleExamination\Models\MasterVaccine;
use Hanafalah\ModuleInformedConsent\Models\MasterInformedConsent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MasterInformedConsentSeeder extends Seeder
{
    public function run()
    {
        $masterInformedConsent = app(config('database.models.MasterInformedConsent', MasterInformedConsent::class));

        $datas = [
            [
                "name" => "Surat Sakit",
                "flag" => "SICK_LATTER",
                'props' => [
                    "first_date"          => '',
                    "last_date"           => '',
                ]
            ],
            [
                "name" => "Surat Sehat",
                "flag" => "HEALTH_LATTER",
                'props' => [
                    "description" => "",
                ]
            ],
            ["name" => "Persetujuan Tindakan Medis", "flag" => "APPROVE_TREATMENT", 'props' => [
                "diagnosis_wd"          => '',
                "basic_diagnosis"       => '',
                "medical_procedure"     => '',
                "procedure_indications" => '',
                "procedure_steps"       => '',
                "objectives"            => '',
                "risks"                 => '',
                "complications"         => '',
                "prognosis"             => '',
                "alternatives"          => '',
                "approve_by"            => '',
            ]],
            ["name" => "Penolakan Tindakan Medis", "flag" => "REJECT_TREATMENT", 'props' => [
                "diagnosis_wd"          => '',
                "basic_diagnosis"       => '',
                "medical_procedure"     => '',
                "procedure_indications" => '',
                "procedure_steps"       => '',
                "objectives"            => '',
                "risks"                 => '',
                "complications"         => '',
                "prognosis"             => '',
                "alternatives"          => '',
                "approve_by"            => '',
            ]]
        ];

        foreach ($datas as $data) {
            $masterInformedConsent->firstOrCreate([
                'name'          => $data['name'],
                'label'          => $data['flag'],
                'linked'        => "-",
                'props'         => json_encode($data['props'])
            ]);
        }
    }
}
