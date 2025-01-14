document.addEventListener("DOMContentLoaded", () => {
    const popularGames = [
        { name: "Valorant", link: "/valorant" },
        { name: "Growtopia", link: "" },
        { name: "Mobile Legends", link: "/mobilelegend" },
        { name: "PUBG", link: "/pubg" },
        { name: "Genshin Impact", link: "" },
        { name: "Free Fire", link: "" },
        { name: "Call of Duty", link: "" },
        { name: "Zepeto", link: "" },
        { name: "Super Sus", link: "" },
        { name: "League of Legends", link: "" },
        { name: "AoV", link: "" },
        { name: "Undawn", link: "" }
    ];

    const newGames = [
        { name: "Honor of Kings", link: "" },
        { name: "Steam Wallet", link: "" },
        { name: "Dota 2", link: "" },
        { name: "FC 24", link: "" }
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
