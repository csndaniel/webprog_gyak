CREATE TABLE weapons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    type VARCHAR(50),
    description TEXT
);

INSERT INTO weapons (name, type, description) VALUES
('Black Viper X1', 'Rifle', 'Gyors, pontos, automata fegyver középtávra.'),
('Shadow Ghost MK2', 'SMG', 'Kompakt kialakítás, gyors mozgáshoz ideális.'),
('IronFang S5', 'Shotgun', 'Közelharcra, széles szórásmintával.'),
('Storm Reaper 9', 'Sniper', 'Nagy hatótávolság, precíziós találatokhoz.'),
('Vortex Blaster', 'Rifle', 'Taktikai kialakítás, LED irányzék.'),
('Hellfire Compact', 'Pistol', 'Oldalfegyver, kis súly, gyors újratöltés.'),
('ThunderClaw XT', 'LMG', 'Magas tűzgyorsaság, nagyméretű tár.'),
('GhostWraith 22', 'SMG', 'Kompakt és halk működés.'),
('Cobra MK9', 'Pistol', 'Könnyű, pontos kézifegyver.'),
('Falcon Edge', 'Sniper', 'Lézeres célzórendszerrel ellátott precíz fegyver.');
