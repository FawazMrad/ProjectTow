<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0587436879',
            'gender' => 'ذكر',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 1',
            'points' => 13,
            'is_study_volunteer' => true,
            'birth_date' => '1962-05-30',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0566968038',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 2',
            'points' => 79,
            'is_study_volunteer' => false,
            'birth_date' => '1973-12-16',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0566798000',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 3',
            'points' => 73,
            'is_study_volunteer' => false,
            'birth_date' => '1963-07-21',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0559142581',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 4',
            'points' => 78,
            'is_study_volunteer' => false,
            'birth_date' => '1998-10-28',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0563001030',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 5',
            'points' => 42,
            'is_study_volunteer' => true,
            'birth_date' => '2004-07-23',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0590008959',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 6',
            'points' => 37,
            'is_study_volunteer' => true,
            'birth_date' => '1986-01-19',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0593330739',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 7',
            'points' => 69,
            'is_study_volunteer' => true,
            'birth_date' => '1960-11-15',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0540478804',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 8',
            'points' => 81,
            'is_study_volunteer' => false,
            'birth_date' => '2000-09-05',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0541442567',
            'gender' => 'انثى',
            'allergies' => null,
            'full_name' => 'مريض 9',
            'points' => 88,
            'is_study_volunteer' => false,
            'birth_date' => '2003-09-05',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0528558949',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 10',
            'points' => 99,
            'is_study_volunteer' => false,
            'birth_date' => '1996-10-29',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0578102586',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 11',
            'points' => 23,
            'is_study_volunteer' => true,
            'birth_date' => '1995-01-06',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0536139054',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 12',
            'points' => 66,
            'is_study_volunteer' => true,
            'birth_date' => '1983-04-19',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0573431628',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 13',
            'points' => 81,
            'is_study_volunteer' => true,
            'birth_date' => '1968-06-24',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0542272867',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 14',
            'points' => 84,
            'is_study_volunteer' => false,
            'birth_date' => '1961-10-12',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0512047906',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 15',
            'points' => 29,
            'is_study_volunteer' => true,
            'birth_date' => '1996-11-07',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0526720067',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 16',
            'points' => 1,
            'is_study_volunteer' => false,
            'birth_date' => '2003-02-11',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0542058786',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 17',
            'points' => 47,
            'is_study_volunteer' => false,
            'birth_date' => '1962-12-14',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0586199540',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 18',
            'points' => 59,
            'is_study_volunteer' => true,
            'birth_date' => '1976-03-10',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0548235422',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 19',
            'points' => 25,
            'is_study_volunteer' => true,
            'birth_date' => '1982-06-01',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0596977151',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 20',
            'points' => 99,
            'is_study_volunteer' => false,
            'birth_date' => '1980-06-02',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0599981896',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 21',
            'points' => 57,
            'is_study_volunteer' => true,
            'birth_date' => '1999-07-27',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0548348289',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 22',
            'points' => 16,
            'is_study_volunteer' => false,
            'birth_date' => '1985-05-05',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0599246023',
            'gender' => 'ذكر',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 23',
            'points' => 84,
            'is_study_volunteer' => false,
            'birth_date' => '2003-09-13',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0555903474',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 24',
            'points' => 84,
            'is_study_volunteer' => true,
            'birth_date' => '1965-01-13',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0510234246',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 25',
            'points' => 76,
            'is_study_volunteer' => false,
            'birth_date' => '1963-11-28',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0527581247',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 26',
            'points' => 31,
            'is_study_volunteer' => false,
            'birth_date' => '1993-11-29',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0540891574',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 27',
            'points' => 80,
            'is_study_volunteer' => true,
            'birth_date' => '1986-09-12',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0576720318',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 28',
            'points' => 18,
            'is_study_volunteer' => false,
            'birth_date' => '1993-03-10',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0594129277',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 29',
            'points' => 18,
            'is_study_volunteer' => true,
            'birth_date' => '1968-01-03',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0560108033',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 30',
            'points' => 18,
            'is_study_volunteer' => true,
            'birth_date' => '1996-11-12',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0552056293',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 31',
            'points' => 97,
            'is_study_volunteer' => false,
            'birth_date' => '1980-10-24',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0557518814',
            'gender' => 'انثى',
            'allergies' => null,
            'full_name' => 'مريض 32',
            'points' => 37,
            'is_study_volunteer' => false,
            'birth_date' => '1977-04-12',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0557253525',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 33',
            'points' => 75,
            'is_study_volunteer' => true,
            'birth_date' => '1975-12-11',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0554611612',
            'gender' => 'انثى',
            'allergies' => null,
            'full_name' => 'مريض 34',
            'points' => 6,
            'is_study_volunteer' => true,
            'birth_date' => '1992-10-13',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0522212170',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 35',
            'points' => 95,
            'is_study_volunteer' => false,
            'birth_date' => '1961-04-12',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0598412650',
            'gender' => 'ذكر',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 36',
            'points' => 43,
            'is_study_volunteer' => false,
            'birth_date' => '1997-09-27',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0596234324',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 37',
            'points' => 77,
            'is_study_volunteer' => true,
            'birth_date' => '1986-11-22',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0510172346',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 38',
            'points' => 27,
            'is_study_volunteer' => true,
            'birth_date' => '1996-11-09',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0586867219',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 39',
            'points' => 80,
            'is_study_volunteer' => false,
            'birth_date' => '1990-02-25',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0593434533',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 40',
            'points' => 13,
            'is_study_volunteer' => false,
            'birth_date' => '1977-05-15',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0525648966',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 41',
            'points' => 40,
            'is_study_volunteer' => true,
            'birth_date' => '2000-12-02',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0562716491',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 42',
            'points' => 52,
            'is_study_volunteer' => false,
            'birth_date' => '1990-08-12',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0555958835',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 43',
            'points' => 60,
            'is_study_volunteer' => false,
            'birth_date' => '1997-02-07',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0538545716',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 44',
            'points' => 98,
            'is_study_volunteer' => false,
            'birth_date' => '1994-07-06',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0594641576',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 45',
            'points' => 12,
            'is_study_volunteer' => false,
            'birth_date' => '1987-05-29',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0588021053',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 46',
            'points' => 58,
            'is_study_volunteer' => false,
            'birth_date' => '1963-10-09',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0513021432',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 47',
            'points' => 11,
            'is_study_volunteer' => false,
            'birth_date' => '1961-04-29',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0522296179',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 48',
            'points' => 5,
            'is_study_volunteer' => false,
            'birth_date' => '2002-12-03',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0579818580',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 49',
            'points' => 61,
            'is_study_volunteer' => true,
            'birth_date' => '1976-10-07',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0550568236',
            'gender' => 'ذكر',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 50',
            'points' => 72,
            'is_study_volunteer' => false,
            'birth_date' => '1963-07-18',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0572703795',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 51',
            'points' => 78,
            'is_study_volunteer' => false,
            'birth_date' => '2000-12-30',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0518491270',
            'gender' => 'ذكر',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 52',
            'points' => 29,
            'is_study_volunteer' => true,
            'birth_date' => '1959-11-22',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0539316317',
            'gender' => 'ذكر',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 53',
            'points' => 42,
            'is_study_volunteer' => false,
            'birth_date' => '2004-05-17',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0587560203',
            'gender' => 'انثى',
            'allergies' => null,
            'full_name' => 'مريض 54',
            'points' => 19,
            'is_study_volunteer' => false,
            'birth_date' => '2003-07-15',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0516173267',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 55',
            'points' => 5,
            'is_study_volunteer' => true,
            'birth_date' => '1982-03-06',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0575636880',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 56',
            'points' => 92,
            'is_study_volunteer' => true,
            'birth_date' => '2001-06-17',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0580914895',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 57',
            'points' => 53,
            'is_study_volunteer' => true,
            'birth_date' => '1995-08-16',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0544255489',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 58',
            'points' => 42,
            'is_study_volunteer' => true,
            'birth_date' => '1992-06-01',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0529434218',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 59',
            'points' => 91,
            'is_study_volunteer' => true,
            'birth_date' => '1989-08-31',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0558323497',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 60',
            'points' => 21,
            'is_study_volunteer' => false,
            'birth_date' => '2006-04-30',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0548900024',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 61',
            'points' => 36,
            'is_study_volunteer' => false,
            'birth_date' => '1994-02-06',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0579961269',
            'gender' => 'انثى',
            'allergies' => null,
            'full_name' => 'مريض 62',
            'points' => 0,
            'is_study_volunteer' => true,
            'birth_date' => '1991-07-25',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0557188096',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 63',
            'points' => 85,
            'is_study_volunteer' => true,
            'birth_date' => '2004-09-05',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0566008463',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 64',
            'points' => 82,
            'is_study_volunteer' => false,
            'birth_date' => '1960-06-15',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0561086554',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 65',
            'points' => 24,
            'is_study_volunteer' => true,
            'birth_date' => '2006-02-16',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0551916588',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 66',
            'points' => 50,
            'is_study_volunteer' => false,
            'birth_date' => '1975-01-16',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0518444816',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 67',
            'points' => 10,
            'is_study_volunteer' => false,
            'birth_date' => '1972-05-22',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0541530044',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 68',
            'points' => 35,
            'is_study_volunteer' => false,
            'birth_date' => '1964-06-05',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0566315618',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 69',
            'points' => 20,
            'is_study_volunteer' => false,
            'birth_date' => '1990-05-07',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0526959154',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 70',
            'points' => 65,
            'is_study_volunteer' => true,
            'birth_date' => '1998-06-07',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0598677535',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 71',
            'points' => 13,
            'is_study_volunteer' => false,
            'birth_date' => '1979-04-15',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0512975340',
            'gender' => 'انثى',
            'allergies' => null,
            'full_name' => 'مريض 72',
            'points' => 52,
            'is_study_volunteer' => true,
            'birth_date' => '1978-01-06',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0594331489',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 73',
            'points' => 82,
            'is_study_volunteer' => true,
            'birth_date' => '2000-05-02',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0557259829',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 74',
            'points' => 25,
            'is_study_volunteer' => true,
            'birth_date' => '2000-04-19',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0588130417',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 75',
            'points' => 89,
            'is_study_volunteer' => true,
            'birth_date' => '2000-12-26',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0565463243',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 76',
            'points' => 10,
            'is_study_volunteer' => true,
            'birth_date' => '1973-03-25',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0592537369',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 77',
            'points' => 80,
            'is_study_volunteer' => true,
            'birth_date' => '1960-11-15',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0515770367',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 78',
            'points' => 60,
            'is_study_volunteer' => false,
            'birth_date' => '1997-02-19',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0519547949',
            'gender' => 'انثى',
            'allergies' => null,
            'full_name' => 'مريض 79',
            'points' => 11,
            'is_study_volunteer' => false,
            'birth_date' => '1996-12-09',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0563591421',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 80',
            'points' => 98,
            'is_study_volunteer' => true,
            'birth_date' => '1962-04-09',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0566417635',
            'gender' => 'ذكر',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 81',
            'points' => 99,
            'is_study_volunteer' => false,
            'birth_date' => '1993-08-24',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => null,
            'phone' => '0551016661',
            'gender' => 'انثى',
            'allergies' => null,
            'full_name' => 'مريض 82',
            'points' => 64,
            'is_study_volunteer' => false,
            'birth_date' => '1993-10-09',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 1,
            'phone' => '0572072507',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 83',
            'points' => 100,
            'is_study_volunteer' => false,
            'birth_date' => '1997-01-01',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 10,
            'phone' => '0516972383',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 84',
            'points' => 6,
            'is_study_volunteer' => false,
            'birth_date' => '1968-11-18',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 9,
            'phone' => '0515110307',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 85',
            'points' => 80,
            'is_study_volunteer' => true,
            'birth_date' => '1982-09-15',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 8,
            'phone' => '0527769822',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 86',
            'points' => 35,
            'is_study_volunteer' => false,
            'birth_date' => '1969-09-10',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 7,
            'phone' => '0567679214',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 87',
            'points' => 70,
            'is_study_volunteer' => true,
            'birth_date' => '1966-06-21',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 7,
            'phone' => '0574268804',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 88',
            'points' => 3,
            'is_study_volunteer' => true,
            'birth_date' => '1960-07-21',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 6,
            'phone' => '0551140462',
            'gender' => 'ذكر',
            'allergies' => null,
            'full_name' => 'مريض 89',
            'points' => 42,
            'is_study_volunteer' => true,
            'birth_date' => '1993-05-13',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 5,
            'phone' => '0588226827',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 90',
            'points' => 19,
            'is_study_volunteer' => true,
            'birth_date' => '1980-09-08',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 4,
            'phone' => '0536385966',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الغبار',
            'full_name' => 'مريض 91',
            'points' => 25,
            'is_study_volunteer' => true,
            'birth_date' => '1994-01-29',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 4,
            'phone' => '0517221867',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 92',
            'points' => 56,
            'is_study_volunteer' => true,
            'birth_date' => '1980-10-03',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 4,
            'phone' => '0568951258',
            'gender' => 'انثى',
            'allergies' => null,
            'full_name' => 'مريض 93',
            'points' => 77,
            'is_study_volunteer' => false,
            'birth_date' => '1986-11-06',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 4,
            'phone' => '0526593357',
            'gender' => 'انثى',
            'allergies' => 'لا يوجد',
            'full_name' => 'مريض 94',
            'points' => 53,
            'is_study_volunteer' => true,
            'birth_date' => '1984-02-07',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 4,
            'phone' => '0563902010',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 95',
            'points' => 14,
            'is_study_volunteer' => false,
            'birth_date' => '1963-09-03',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 3,
            'phone' => '0599546353',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 96',
            'points' => 92,
            'is_study_volunteer' => true,
            'birth_date' => '1989-07-24',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 2,
            'phone' => '0552215185',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 97',
            'points' => 84,
            'is_study_volunteer' => false,
            'birth_date' => '1998-08-30',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 2,
            'phone' => '0552524835',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 98',
            'points' => 47,
            'is_study_volunteer' => true,
            'birth_date' => '1998-04-10',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 1,
            'phone' => '0532977430',
            'gender' => 'ذكر',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 99',
            'points' => 42,
            'is_study_volunteer' => false,
            'birth_date' => '1985-07-07',
        ]);

        Patient::create([
            'family_id' => null,
            'medical_study_id' => 1,
            'phone' => '0536450208',
            'gender' => 'انثى',
            'allergies' => 'حساسية من الدواء',
            'full_name' => 'مريض 100',
            'points' => 60,
            'is_study_volunteer' => false,
            'birth_date' => '2003-10-05',
        ]);


    }
}
