<?php
namespace Unit4\NVL;

use Unit4\AbstractApiEndpoint;

class PersonInRoleNVL extends AbstractApiEndpoint
{
    const API_SUFFIX = 'PersonInRoleNVL';

    /**
     * PersonInRoleNVL: Fetches a list of Persons matching a specific Unit4 roletype
     *
     * @param integer $roleType One of the values from RoleDefinitions
     * @return array
     * @throws \Exception
     */
    public function findByRoleType($roleType)
    {
        $response = $this->apiClient->request(
            $this->configuration->getApiRoute(static::API_SUFFIX),
            $roleType
        );

        $decodedResponse = json_decode($response);

        return $decodedResponse;
    }
}