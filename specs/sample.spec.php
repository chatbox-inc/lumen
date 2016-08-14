<?php //arrayobject.spec.php
describe('ArrayObject', function() {

    it('GET / should get ok ', function() {
        $this->lumen->get("/");
        /** @var \Illuminate\Http\Response $response */
        $response = $this->lumen->response;

        assert($response->getStatusCode() === 200);
    });
});
?>