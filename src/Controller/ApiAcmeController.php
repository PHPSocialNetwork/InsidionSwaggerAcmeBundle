<?php

namespace PhpSocialNetwork\InsidionSwaggerAcmeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Insidion\SwaggerBundle\Annotation\Swagger;
use Insidion\SwaggerBundle\Annotation\SwaggerParameter;
use Insidion\SwaggerBundle\Annotation\SwaggerResult;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class ApiAcmeController extends Controller
{
    /**
     * @Route("/", name="insidion_swagger_acme.index_head")
     * @Swagger(showInDocs=true, operationId="insidion_acme_index_head", tags={"acme"})
     * @SwaggerResult(status="200", description="Shows the order", schema="integer")
     * @Method("HEAD")
     */
    public function InsidionIndexHeadAction(Request $request, $arg)
    {
        return new JsonResponse();
    }

    /**
     * @Route("/", name="insidion_swagger_acme.index_get")
     * @Swagger(showInDocs=true, operationId="insidion_acme_index_get", tags={"acme"})
     * @SwaggerResult(status="200", description="Shows the order", schema="integer")
     * @Method("GET")
     */
    public function InsidionIndexGetAction(Request $request, $arg)
    {
        return new JsonResponse(['message' => 'Hello world !']);
    }

    /**
     * @Route("/", name="insidion_swagger_acme.index_post")
     * @Swagger(showInDocs=true, operationId="insidion_acme_index_post", tags={"acme"})
     * @SwaggerResult(status="200", description="Shows the order", schema="integer")
     * @Method("POST")
     */
    public function InsidionIndexPostAction(Request $request, $arg)
    {
        return new JsonResponse(['message' => 'Hello world !']);
    }

    /**
     * @Route("/", name="insidion_swagger_acme.index_delete")
     * @Swagger(showInDocs=true, operationId="insidion_acme_index_delete", tags={"acme"})
     * @SwaggerResult(status="200", description="Shows the order", schema="integer")
     * @Method("DELETE")
     */
    public function InsidionIndexDeleteAction(Request $request, $arg)
    {
        return new JsonResponse(['message' => 'Hello world !']);
    }

    /**
     * @Route("/", name="insidion_swagger_acme.index_put")
     * @Swagger(showInDocs=true, operationId="insidion_acme_index_put", tags={"acme"})
     * @SwaggerResult(status="200", description="Shows the order", schema="integer")
     * @Method("PUT")
     */
    public function InsidionIndexPutAction(Request $request, $arg)
    {
        return new JsonResponse(['message' => 'Hello world !']);
    }

    /**
     * @Route("/", name="insidion_swagger_acme.index_patch")
     * @Swagger(showInDocs=true, operationId="insidion_acme_index_patch", tags={"acme"})
     * @SwaggerResult(status="200", description="Shows the order", schema="integer")
     * @Method("PATCH")
     */
    public function InsidionIndexPatchAction(Request $request, $arg)
    {
        return new JsonResponse(['message' => 'Hello world !']);
    }

    /**
     * @Route("/", name="insidion_swagger_acme.index_options")
     * @Swagger(showInDocs=true, operationId="insidion_acme_index_options", tags={"acme"})
     * @SwaggerResult(status="200", description="Shows the order", schema="integer")
     * @Method("OPTIONS")
     */
    public function InsidionIndexOptionsAction(Request $request, $arg)
    {
        return new JsonResponse(['message' => 'Hello world !']);
    }
}
