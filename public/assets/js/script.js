document.addEventListener("DOMContentLoaded", () => {
    const popularGames = [
        { name: "Valorant", link: "/valorant" },
        { name: "Growtopia", link: "growtopia.html" },
        { name: "Mobile Legends", link: "mobile-legends.html" },
        { name: "PUBG", link: "pubg.html" },
        { name: "Genshin Impact", link: "genshin-impact.html" },
        { name: "Free Fire", link: "free-fire.html" },
        { name: "Call of Duty", link: "call-of-duty.html" },
        { name: "Zepeto", link: "zepeto.html" },
        { name: "Super Sus", link: "super-sus.html" },
        { name: "League of Legends", link: "league-of-legends.html" },
        { name: "AoV", link: "aov.html" },
        { name: "Undawn", link: "undawn.html" }
    ];

    const newGames = [
        { name: "Honor of Kings", link: "honor-of-kings.html" },
        { name: "Steam Wallet", link: "steam-wallet.html" },
        { name: "Dota 2", link: "dota-2.html" },
        { name: "FC 24", link: "fc24.html" }
    ];

    const popularGrid = document.querySelector(".popular-grid");
    const newGrid = document.querySelector(".new-grid");

    // Populate Popular Games
    popularGames.forEach(game => {
        const card = document.createElement("div");
        card.className = "card";
        card.innerHTML = `<a href='${game.link}' style='text-decoration: none; color: white;'><img src='../assets/img/card banner/${game.name}.png' alt='${game.name}'><p>${game.name}</p></a>`;
        popularGrid.appendChild(card);
    });

    // Populate New Games
    newGames.forEach(game => {
        const card = document.createElement("div");
        card.className = "card";
        card.innerHTML = `<a href='${game.link}' style='text-decoration: none; color: white;'><img src='../assets/img/card banner/${game.name}.png' alt='${game.name}'><p>${game.name}</p></a>`;
        newGrid.appendChild(card);
    });
});
