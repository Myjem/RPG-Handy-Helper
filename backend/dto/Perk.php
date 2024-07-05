<?php

namespace rpg\DTO;

enum PerkType {
    case Main;
    case Secondary;
}

enum PerkName {
    case WalkaWrecz;
    case UmiejetnosciStrzeleckie;
    case Krzepa;
    case Odpornosc;
    case Zrecznosc;
    case Inteligencja;
    case SilaWoli;
    case Oglada;
    case Akcja;
    case Zywotnosc;
    case Sila;
    case Wytrzymalosc;
    case Szybkosc;
    case PunktyObledu;
    case PunktyPrzeznaczenia;
    case PunktySzczescia;
}

class Perk {
    private PerkType $type;
    private PerkName $name;
    private int $startingValue;
    private int $developmentValue = 0;
    private int $actualValue = 0;

    public function __construct(PerkType $type, PerkName $name,
            int $startingValue) {
        $this->type = $type;
        $this->name = $name;
        $this->startingValue = $startingValue;
        $this->actualValue = $startingValue;
    }



    public function getType(): PerkType {
        return $this->type;
    }

    public function getName(): PerkName {
        return $this->name;
    }

    public function getStartingValue(): int {
        return $this->startingValue;
    }

    public function getDevelopmentValue(): int {
        return $this->developmentValue;
    }

    public function getActualValue(): int {
        return $this->actualValue;
    }

    public function setDevelopmentValue(int $developmentValue): void {
        $this->developmentValue = $developmentValue;
    }

    public function setActualValue(int $actualValue): void {
        $this->actualValue = $actualValue;
    }

    public function __toString(): string {
        return $this->name . ' - ' . $this->actualValue;
    }

    public function __toArray(): array {
        return [
            'type' => $this->type,
            'name' => $this->name,
            'startingValue' => $this->startingValue,
            'developmentValue' => $this->developmentValue,
            'actualValue' => $this->actualValue
        ];
    }
}
