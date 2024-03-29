let xp = 0;
let health = 100;
let gold = 50;
let currentWeapon = 0;
let fighting;
let monsterHealth;
let inventory = ["strick"];


const button1 = document.querySelector("#button1");
const button2 = document.querySelector("#button2");
const button3 = document.querySelector("#button3");
const text = document.querySelector("#text");
const xpText = document.querySelector("#xpText");
const healthText = document.querySelector("#healthText");
const goldText = document.querySelector("#goldText");
const monsterStats = document.querySelector("#monsterStats");
const monsterNameText = document.querySelector("#monsterName");
const monsterHealthText = document.querySelector("#monsterHealth");

const weapons = [
    {
        name: "stick",
        power: 5
    },
    {
        name: "dagger",
        power: 30
    },
    {
        name: "claw hammer",
        power: 50
    },
    {
        name: "sword",
        power: 100
    }
];

const locations = [
    {
        name: "town sqaure",
        "button text": ["Go to store", "Go to cave", "Fight Dragon"],
        "button functions": [goStore, goCave, fightDragon],
        text: "You are in the town square. You see a sign that says \"store\""

    },
    {
        name: "store",
        "button text": ["Buy 10 health (10 gold)", "Buy weapon (30 gold)", "Go To Town Square"],
        "button functions": [buyHealth, buyWeapon, goTown],
        text: "You are in the store!"

    },
    {
        name: "cave",
        "button text": ["Fight Slime", "Fight the Soul Beast", "Go To Town Square"],
        "button functions": [fightSlime, fightSoulBeast, goTown],
        text: "You enter The Cave. You see some monsters!"

    },
    {
        name: "fight",
        "button text": ["Attack", "Dodge", "Run"],
        "button functions": [attack, dodge, goTown],
        text: "You are fighting a monster!"
    },
    {
        name: "kill monster",
        "button text": ["Go to town square", "Go to town square", "Go to town square"],
        "button functions": [goTown, goTown, goTown],
        text: "You killed the monster! Experience points and gold will be added!"
    },
    {
        name: "Lose",
        "button text": ["REPLAY?", "REPLAY?", "REPLAY?"],
        "button functions": [restart, restart, restart],
        text: "You died!"
    },
    {
        name: "",
        "button text": ["REPLAY?", "REPLAY?", "REPLAY?"],
        "button functions": [restart, restart, restart],
        text: "You defeated the dragon! You Won!"
    }
];

const monsters = [
    {
        name: "Slime",
        level: 2,
        health: 15
    },
    {
        name: "Soul Beast",
        level: 10,
        health: 150
    },
    {
        name: "dragon",
        level: 20,
        health: 300
    }
];

// initialize buttons 

button1.onclick = goStore;
button2.onclick = goCave;
button3.onclick = fightDragon;

function update(locations) {
    monsterStats.style.display = "none";
    button1.innerText = locations["button text"][0];
    button2.innerText = locations["button text"][1];
    button3.innerText = locations["button text"][2];
    button1.onclick = locations["button functions"][0];
    button2.onclick = locations["button functions"][1];
    button3.onclick = locations["button functions"][2];
    text.innerText = locations.text;
}

function goStore() {
    update(locations[1]);
}

function goTown() {
    update(locations[0]);
}

function goCave() {
    update(locations[2]);
}

function buyHealth() {
    if (gold >= 10) {
        gold -= 10;
        health += 10;
        goldText.innerText = gold;
        healthText.innerText = health;
    } else {
        text.innerText = "You don't have enough gold!";
    }

}

function buyWeapon() {
    if (currentWeapon < weapons.length - 1) {
        if (gold >= 30) {
            gold -= 30;
            currentWeapon++;
            goldText.innerText = gold;
            let newWeapon = weapons[currentWeapon];
            text.innerText = "You now have a " + newWeapon.name + "!";
            inventory.push(newWeapon.name);
            text.innerText += "In your inventory you have: " + inventory;
        } else {
            text.innerText = "You don't have enough gold!";
        }
    } else {
        text.innerText = "You have the most powerful weapon!";
        button2.innerText = "Sell weapon for 15 gold";
        button2.onclick = sellWeapon;
    }
}

function sellWeapon() {
    if (inventory.length > 1) {
        gold += 15;
        goldText.innerText = gold;
        let currentWeapon = inventory.shift();
        text.innerText += "In your inventory you have: " + inventory;
    } else {
        text.innerText = "Don't sell you only weapon!";
    }
}

function fightDragon() {
    fighting = 2;
    goFight();
}

function fightSlime() {
    fighting = 0;
    goFight();
}

function fightSoulBeast() {
    fighting = 1;
    goFight();
}

function goFight() {
    update(locations[3]);
    monsterHealth = monsters[fighting].health;
    monsterStats.style.display = "block";
    monsterNameText.innerText = monsters[fighting].name;
    monsterHealthText.innerText = monsterHealth;
}

function attack() {
    text.innerText = "The" + monsters[fighting].name + "attacks!";
    text.innerText = "You attack with your " + weapons[currentWeapon].name + "!";
    health -= monsters[fighting].level;
    monsterHealth -= weapons[currentWeapon].power + Math.floor(Math.random() * xp) + 1;
    healthText.innerText = health;
    monsterHealthText.innerText = monsterHealth;

    if (health <= 0) {
        lose();
    } else if (monsterHealth <= 0) {
        fighting === 2 ? winGame() : defeatMonster();
    }
}

function dodge() {
    text.innerText = "You dodge the attack from the" + monsters[fighting].name + "!";
}

function defeatMonster() {
    gold += Math.floor(monsters[fighting].level * 6.7);
    xp += monsters[fighting].level;
    goldText.innerText = gold;
    xpText.innerText = xp;
    update(locations[4]);
}

function lose() {
    update(locations[5]);
}

function winGame() {
    update(locations[6]);
}

function restart() {
    xp = 0;
    health = 100;
    gold = 50;
    currentWeapon = 0;
    inventory = ["stick"];
    goldText.innerText = gold;
    healthText.innerText = health;
    xpText.innerText = xp;
    goTown();
}

restart()