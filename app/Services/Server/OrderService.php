<?php

namespace App\Services\Server;
use App\Services\Server\Dto\Requests\CreateOrderRequestDto;

class OrderService
{

    /**
     * @throws \Exception
     */
    function create(CreateOrderRequestDto $dto): Dto\Responses\CreateOrderResponseDto {

        try {
            $orderData = (new BaseApiService())->createOrder($dto);
        } catch (\Throwable $e) {
            throw new \Exception($e->getMessage()); //todo fix
        }

        return $orderData;
    }

}
