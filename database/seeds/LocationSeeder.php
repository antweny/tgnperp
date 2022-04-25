<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = $this->arrayValues();

        foreach ($locations as $location)
        {
            Location::updateOrCreate($location);
        }
    }

    //  Array of Values
    private function arrayValues(): array
    {
        return [
            ['name' => 'Albania '],['name' => 'Algeria '],['name' => 'American Samoa '],['name' => 'Andorra '],['name' => 'Angola'],
            ['name' => 'Anguilla '],['name' => 'Antigua & Barbuda '],['name' => 'Argentina '],['name' => 'Armenia '],['name' => 'Aruba '],
            ['name' => 'Australia '],['name' => 'Austria '], ['name' => 'Azerbaijan '],['name' => 'Bahamas, The '],['name' => 'Bahrain '],
            ['name' => 'Bangladesh '],['name' => 'Barbados '],['name' => 'Belarus '],['name' => 'Belgium '],['name' => 'Belize '],
            ['name' => 'Benin '],['name' => 'Bermuda '],['name' => 'Bhutan '],['name' => 'Bolivia '],['name' => 'Bosnia & Herzegovina '],
            ['name' => 'Botswana '],['name' => 'Brazil '],['name' => 'British Virgin Is. '],['name' => 'Brunei '],['name' => 'Bulgaria '],
            ['name' => 'Burkina Faso '],
            ['name' => 'Burma '],
            ['name' => 'Burundi '],
            ['name' => 'Cambodia '],
            ['name' => 'Cameroon '],
            ['name' => 'Canada '],
            ['name' => 'Cape Verde '],
            ['name' => 'Cayman Islands '],
            ['name' => 'Central African Rep. '],
            ['name' => 'Chad '],
            ['name' => 'Chile '],
            ['name' => 'China '],
            ['name' => 'Colombia '],
            ['name' => 'Comoros '],
            ['name' => 'Congo, Dem. Rep. '],
            ['name' => 'Congo, Repub. Of The '],
            ['name' => 'Cook Islands '],
            ['name' => 'Costa Rica '],
            ['name' => 'Cote D\'ivoire '],
            ['name' => 'Croatia '],
            ['name' => 'Cuba '],
            ['name' => 'Cyprus '],
            ['name' => 'Czech Republic '],
            ['name' => 'Denmark '],
            ['name' => 'Djibouti '],
            ['name' => 'Dominica '],
            ['name' => 'Dominican Republic '],
            ['name' => 'East Timor '],
            ['name' => 'Ecuador '],
            ['name' => 'Egypt '],
            ['name' => 'El Salvador '],
            ['name' => 'Equatorial Guinea '],
            ['name' => 'Eritrea '],
            ['name' => 'Estonia '],
            ['name' => 'Ethiopia '],
            ['name' => 'Faroe Islands '],
            ['name' => 'Fiji '],
            ['name' => 'Finland '],
            ['name' => 'France '],
            ['name' => 'French Guiana '],
            ['name' => 'French Polynesia '],
            ['name' => 'Gabon '],
            ['name' => 'Gambia, The '],
            ['name' => 'Gaza Strip '],
            ['name' => 'Georgia '],
            ['name' => 'Germany '],
            ['name' => 'Ghana '],
            ['name' => 'Gibraltar '],
            ['name' => 'Greece '],
            ['name' => 'Greenland '],
            ['name' => 'Grenada '],
            ['name' => 'Guadeloupe '],
            ['name' => 'Guam '],
            ['name' => 'Guatemala '],
            ['name' => 'Guernsey '],
            ['name' => 'Guinea '],
            ['name' => 'Guinea-bissau '],
            ['name' => 'Guyana '],
            ['name' => 'Haiti '],
            ['name' => 'Honduras '],
            ['name' => 'Hong Kong '],
            ['name' => 'Hungary '],
            ['name' => 'Iceland '],
            ['name' => 'India '],
            ['name' => 'Indonesia '],
            ['name' => 'Iran '],
            ['name' => 'Iraq '],
            ['name' => 'Ireland '],
            ['name' => 'Isle Of Man '],
            ['name' => 'Israel '],
            ['name' => 'Italy '],
            ['name' => 'Jamaica '],
            ['name' => 'Japan '],
            ['name' => 'Jersey '],
            ['name' => 'Jordan '],
            ['name' => 'Kazakhstan '],
            ['name' => 'Kenya'],
            ['name' => 'Kiribati '],
            ['name' => 'Korea, North '],
            ['name' => 'Korea, South '],
            ['name' => 'Kuwait '],
            ['name' => 'Kyrgyzstan '],
            ['name' => 'Laos '],
            ['name' => 'Latvia '],
            ['name' => 'Lebanon '],
            ['name' => 'Lesotho '],
            ['name' => 'Liberia '],
            ['name' => 'Libya '],
            ['name' => 'Liechtenstein '],
            ['name' => 'Lithuania '],
            ['name' => 'Luxembourg '],
            ['name' => 'Macau '],
            ['name' => 'Macedonia '],
            ['name' => 'Madagascar '],
            ['name' => 'Malawi '],
            ['name' => 'Malaysia '],
            ['name' => 'Maldives '],
            ['name' => 'Mali '],
            ['name' => 'Malta '],
            ['name' => 'Marshall Islands '],
            ['name' => 'Martinique '],
            ['name' => 'Mauritania '],
            ['name' => 'Mauritius '],
            ['name' => 'Mayotte '],
            ['name' => 'Mexico '],
            ['name' => 'Moldova '],
            ['name' => 'Monaco '],
            ['name' => 'Mongolia '],
            ['name' => 'Montserrat '],
            ['name' => 'Morocco '],
            ['name' => 'Mozambique '],
            ['name' => 'N. Mariana Islands '],
            ['name' => 'Namibia '],
            ['name' => 'Nauru '],
            ['name' => 'Nepal '],
            ['name' => 'Netherlands '],
            ['name' => 'Netherlands Antilles '],
            ['name' => 'New Caledonia '],
            ['name' => 'New Zealand '],
            ['name' => 'Nicaragua '],
            ['name' => 'Niger '],
            ['name' => 'Nigeria '],
            ['name' => 'Norway '],
            ['name' => 'Oman '],
            ['name' => 'Pakistan '],
            ['name' => 'Palau '],
            ['name' => 'Panama '],
            ['name' => 'Papua New Guinea '],
            ['name' => 'Paraguay '],
            ['name' => 'Peru '],
            ['name' => 'Philippines '],
            ['name' => 'Poland '],
            ['name' => 'Portugal '],
            ['name' => 'Puerto Rico '],
            ['name' => 'Qatar '],
            ['name' => 'Reunion '],
            ['name' => 'Romania '],
            ['name' => 'Russia '],
            ['name' => 'Rwanda '],
            ['name' => 'Saint Helena '],
            ['name' => 'Saint Lucia '],
            ['name' => 'Saint Vincent And The Grenadines '],
            ['name' => 'Samoa '],
            ['name' => 'San Marino '],
            ['name' => 'Sao Tome & Principe '],
            ['name' => 'Saudi Arabia '],
            ['name' => 'Senegal '],
            ['name' => 'Serbia '],
            ['name' => 'Seychelles '],
            ['name' => 'Sierra Leone '],
            ['name' => 'Singapore'],
            ['name' => 'Slovakia '],
            ['name' => 'Slovenia '],
            ['name' => 'Solomon Islands '],
            ['name' => 'Somalia '],
            ['name' => 'South Africa '],
            ['name' => 'Spain '],
            ['name' => 'Sri Lanka '],
            ['name' => 'Sudan '],
            ['name' => 'Suriname '],
            ['name' => 'Swaziland '],
            ['name' => 'Sweden '],
            ['name' => 'Switzerland '],
            ['name' => 'Syria '],
            ['name' => 'Taiwan '],
            ['name' => 'Tajikistan '],
            ['name' => 'Tanzania'],
            ['name' => 'Thailand '],
            ['name' => 'Togo '],
            ['name' => 'Tonga '],
            ['name' => 'Trinidad & Tobago '],
            ['name' => 'Tunisia '],
            ['name' => 'Turkey '],
            ['name' => 'Turkmenistan '],
            ['name' => 'Tuvalu '],
            ['name' => 'Uganda '],
            ['name' => 'Ukraine '],
            ['name' => 'United Arab Emirates '],
            ['name' => 'United Kingdom '],
            ['name' => 'United States '],
            ['name' => 'Uruguay '],
            ['name' => 'Uzbekistan '],
            ['name' => 'Vanuatu '],
            ['name' => 'Venezuela '],
            ['name' => 'Vietnam '],
            ['name' => 'Virgin Islands '],
            ['name' => 'Wallis And Futuna '],
            ['name' => 'West Bank '],
            ['name' => 'Western Sahara '],
            ['name' => 'Yemen '],
            ['name' => 'Zambia '],
            ['name' => 'Zimbabwe ']
        ];
    }
}
