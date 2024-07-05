<?php

namespace rpg\DTO;

use rpg\DTO\Perk;
use rpg\DTO\Race;
use rpg\DTO\Proffesion;

enum Sex {
    case Male;
    case Female;
}

class Player {
    private string $name;
    private string $surname;
    private Sex $sex;
    private Race $race;
    private int $age;
    private int $height;
    private int $weight;
    private int $siblings;
    private string $birthplace;
    private string $eyeColor;
    private string $hairColor;
    private string $starSign;
    private string $specialMarks;
    private Proffesion $currentProffesion;
    private Proffesion $previousProffesion;
    private array $perks;

    public function __construct(
        string $name,
        string $surname,
        Sex $sex,
        Race $race,
        int $age,
        int $height,
        int $weight,
        int $siblings,
        string $birthplace,
        string $eyeColor,
        string $hairColor,
        string $starSign,
        string $specialMarks,
        Proffesion $currentProffesion,
        Proffesion $previousProffesion
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->sex = $sex;
        $this->race = $race;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
        $this->siblings = $siblings;
        $this->birthplace = $birthplace;
        $this->eyeColor = $eyeColor;
        $this->hairColor = $hairColor;
        $this->starSign = $starSign;
        $this->specialMarks = $specialMarks;
        $this->currentProffesion = $currentProffesion;
        $this->previousProffesion = $previousProffesion;
        $this->perks = $race->getDefaultPerks();
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function getSex(): Sex {
        return $this->sex;
    }

    public function getRace(): Race {
        return $this->race;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getHeight(): int {
        return $this->height;
    }

    public function getWeight(): int {
        return $this->weight;
    }

    public function getSiblings(): int {
        return $this->siblings;
    }

    public function getBirthplace(): string {
        return $this->birthplace;
    }

    public function getEyeColor(): string {
        return $this->eyeColor;
    }

    public function getHairColor(): string {
        return $this->hairColor;
    }

    public function getStarSign(): string {
        return $this->starSign;
    }

    public function getSpecialMarks(): string {
        return $this->specialMarks;
    }

    public function getCurrentProffesion(): Proffesion {
        return $this->currentProffesion;
    }

    public function getPreviousProffesion(): Proffesion {
        return $this->previousProffesion;
    }

    public function getPerks(): array {
        return $this->perks;
    }

    public function setPerks(array $perks): void {
        $this->perks = $perks;
    }

    public function setPerk(Perk $perk): void {
        $this->perks[$perk->getName()] = $perk;
    }

    public function getPerk(PerkName $perkName): Perk {
        return $this->perks[$perkName];
    }

    public function getPerkValue(PerkName $perkName): int {
        return $this->perks[$perkName]->getActualValue();
    }

    public function setPerkValue(PerkName $perkName, int $value): void {
        $this->perks[$perkName]->setActualValue($value);
    }

    public function getPerkDevelopmentValue(PerkName $perkName): int {
        return $this->perks[$perkName]->getDevelopmentValue();
    }

    public function setPerkDevelopmentValue(PerkName $perkName, int $value): void {
        $this->perks[$perkName]->setDevelopmentValue($value);
    }

    public function __toString(): string {
        return $this->name . ' ' . $this->surname . ' (' . $this->race->getName() . ')';
    }

    public function __toArray(): array {
        return [
            'name' => $this->name,
            'surname' => $this->surname,
            'sex' => $this->sex,
            'race' => $this->race,
            'age' => $this->age,
            'height' => $this->height,
            'weight' => $this->weight,
            'siblings' => $this->siblings,
            'birthplace' => $this->birthplace,
            'eyeColor' => $this->eyeColor,
            'hairColor' => $this->hairColor,
            'starSign' => $this->starSign,
            'specialMarks' => $this->specialMarks,
            'currentProffesion' => $this->currentProffesion,
            'previousProffesion' => $this->previousProffesion,
            'perks' => $this->perks
        ];
    }
}