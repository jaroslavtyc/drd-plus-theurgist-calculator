<?php declare(strict_types = 1);

declare(strict_types=1);

namespace DrdPlus\Tables\Armaments\Weapons\Melee;

use DrdPlus\Codes\Armaments\MeleeWeaponCode;
use DrdPlus\Codes\Armaments\WeaponCategoryCode;
use DrdPlus\Codes\Body\PhysicalWoundTypeCode;
use DrdPlus\BaseProperties\Strength;
use DrdPlus\Tables\Armaments\Weapons\Melee\Partials\MeleeWeaponsTable;
use DrdPlus\Tables\Measurements\Weight\Weight;

/**
 * See PPH page 85, @link https://pph.drdplus.info/#tabulka_zbrani_jednorucni_zbrane
 * and @link https://pph.drdplus.info/#tabulka_zbrani_obourucni_zbrane
 */
class StaffsAndSpearsTable extends MeleeWeaponsTable
{
    /**
     * @return string
     */
    protected function getDataFileName(): string
    {
        return __DIR__ . '/data/staffs_and_spears.csv';
    }

    /**
     * @param MeleeWeaponCode $meleeWeaponCode you need a code even for a custom weapon, so prove now
     * @param Strength $requiredStrength
     * @param int $weaponLength
     * @param int $offensiveness
     * @param int $wounds
     * @param PhysicalWoundTypeCode $woundTypeCode
     * @param int $cover
     * @param Weight $weight
     * @param bool $twoHandedOnly
     * @return bool
     * @throws \DrdPlus\Tables\Armaments\Weapons\Exceptions\NewWeaponIsNotOfRequiredType
     * @throws \DrdPlus\Tables\Armaments\Weapons\Exceptions\DifferentWeaponIsUnderSameName
     */
    public function addNewStaffOrSpear(
        MeleeWeaponCode $meleeWeaponCode,
        Strength $requiredStrength,
        int $weaponLength,
        int $offensiveness,
        int $wounds,
        PhysicalWoundTypeCode $woundTypeCode,
        int $cover,
        Weight $weight,
        bool $twoHandedOnly
    ): bool
    {
        return $this->addCustomMeleeWeapon(
            $meleeWeaponCode,
            WeaponCategoryCode::getIt(WeaponCategoryCode::STAFFS_AND_SPEARS),
            $requiredStrength,
            $weaponLength,
            $offensiveness,
            $wounds,
            $woundTypeCode,
            $cover,
            $weight,
            $twoHandedOnly
        );
    }
}