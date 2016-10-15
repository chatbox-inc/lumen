<?php //arrayobject.spec.php
describe('ArrayObject', function() {

    it('GET / should get ok ', function() {
        $lumen = new HttpSpec(require __DIR__ . "/../bootstrap.php");

        $response = $lumen->get("/")->response();

        assert($response->getStatusCode() === 200);
        $lumen->isntJsonResponse();

        $response = $lumen->get("/")->response();

        assert($response->getStatusCode() === 200);
        $lumen->isntJsonResponse();

        $response = $lumen->get("/")->response();

        assert($response->getStatusCode() === 200);
        $lumen->isntJsonResponse();

        $response = $lumen->get("/")->response();

        assert($response->getStatusCode() === 200);
        $lumen->isntJsonResponse();
    });
});
?>