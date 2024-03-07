<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Common;
use App\Models\Coupon;

class DiscountRepository
{
    public function saveCommon($formData, $commonId): Common
    {
        $common = Common::query()->updateOrCreate(
            [
                'id' => $commonId
            ],
            [
                'title' => $formData['title'],
                'percentage' => $formData['percentage'],
                'discount_ceiling' => $formData['discount_ceiling'],
                'minimal_order_amount' => $formData['minimal_order_amount'],
                'start_date' => $formData['start_date'],
                'end_date' => $formData['end_date'],
            ]
        );
        return $common;
    }

    public function findById(int $id)
    {
        return Common::query()->where('id', $id)->first();
    }

    public function deleteById(int $value)
    {
        Common::query()->where('id', $value)->delete();
    }

    public function updateById(int $id, array $data)
    {
        Common::query()->where('id', $id)->update($data);
    }

    public function saveCoupon($formData, $couponId)
    {
        if (!isset($formData['user_id'])) {
            $formData['user_id'] = null;
        }
        $coupon = Coupon::query()->updateOrCreate(
            [
                'id' => $couponId
            ],
            [
                'title' => $formData['title'],
                'code' => $formData['code'],
                'amount' => $formData['amount'],
                'amount_type' => $formData['amount_type'],
                'discount_ceiling' => $formData['discount_ceiling'],
                'type' => $formData['type'],
                'start_date' => $formData['start_date'],
                'end_date' => $formData['end_date'],
                'user_id' => $formData['user_id'],

            ]
        );
        return $coupon;
    }

    public function deleteCouponById(int $value)
    {
        Coupon::query()->where('id', $value)->delete();
    }

    public function findCouponById(int $id)
    {
        return Coupon::query()->where('id', $id)->first();
    }

    public function updateCouponById(int $id, array $data)
    {
        Coupon::query()->where('id', $id)->update($data);
    }
}
