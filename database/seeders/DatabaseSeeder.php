<?php

namespace Database\Seeders;

use Aaran\AccountMaster\Database\Seeders\S301_AccountHeadsSeeder;
use Aaran\AccountMaster\Database\Seeders\S302_LedgerGroupSeeder;
use Aaran\AccountMaster\Database\Seeders\S303_LedgerSeeder;
use Aaran\Common\Database\Seeders\S103_CitySeeder;
use Aaran\Common\Database\Seeders\S102_LabelSeeder;
use Aaran\Common\Database\Seeders\S101_CommonSeeder;
use Aaran\Common\Database\Seeders\S104_StateSeeder;
use Aaran\Common\Database\Seeders\S105_CountrySeeder;
use Aaran\Common\Database\Seeders\S106_PincodeSeeder;
use Aaran\Common\Database\Seeders\S107_HsncodeSeeder;
use Aaran\Common\Database\Seeders\S108_UnitSeeder;
use Aaran\Common\Database\Seeders\S109_CategorySeeder;
use Aaran\Common\Database\Seeders\S110_ColourSeeder;
use Aaran\Common\Database\Seeders\S111_SizeSeeder;
use Aaran\Common\Database\Seeders\S112_DepartmentSeeder;
use Aaran\Common\Database\Seeders\S113_TransportSeeder;
use Aaran\Common\Database\Seeders\S114_BankSeeder;
use Aaran\Common\Database\Seeders\S115_ReceipttypeSeeder;
use Aaran\Common\Database\Seeders\S116_DespatcheSeeder;
use Aaran\Master\Database\Seeders\S401_CompanySeeder;
use Aaran\Master\Database\Seeders\S403_ContactSeeder;
use Aaran\Master\Database\Seeders\S404_ProductSeeder;
use Aaran\Master\Database\Seeders\S405_OrderSeeder;
use Aaran\Master\Database\Seeders\S406_StyleSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        S01_TenantSeeder::run();
        S02_RoleSeeder::run();
        S03_UserSeeder::run();
    }
}
