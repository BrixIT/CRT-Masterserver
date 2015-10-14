<?php

namespace Brixit\CrtMasterBundle\Controller;

use Brixit\CrtMasterBundle\Entity\Computer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends Controller
{
    public function registerAction(Request $request)
    {
        $content = $request->getContent();
        if (!empty($content)) {
            $params = json_decode($content, true);

            $computerId = $params['ComputerId'];
            $computerRepository = $this->get('doctrine')->getRepository('BrixitCrtMasterBundle:Computer');
            $manager = $this->get('doctrine')->getManager();

            $computer = $computerRepository->findOneBy(['computerId' => $computerId]);
            if(!$computer){
                $computer = new Computer();
                $computer->setComputerId($computerId);
                $response = [
                    "state" => "new"
                ];
            }else{
                $response = [
                    "state" => "last seen " . $computer->getLastSeen()->format('Y-m-d H:i')
                ];
            }
            $computer->setLastSeen(new \DateTime());
            $computer->setReportingModules($params['ReportingModules']);
            $manager->persist($computer);
            $manager->flush();

            return new JsonResponse($response);
        }
    }
}
