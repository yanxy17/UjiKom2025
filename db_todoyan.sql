-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2025 pada 05.09
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_todoyan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `subtasks`
--

CREATE TABLE `subtasks` (
  `id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `subtask_name` varchar(255) NOT NULL,
  `status` enum('Belum Selesai','Selesai') DEFAULT 'Belum Selesai',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `subtasks`
--

INSERT INTO `subtasks` (`id`, `task_id`, `subtask_name`, `status`, `created_at`) VALUES
(10, 10, 'megambar', 'Selesai', '2025-02-10 04:08:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `status` enum('Belum Selesai','Selesai') DEFAULT 'Belum Selesai',
  `deadline` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `status`, `deadline`, `created_at`) VALUES
(10, 'Senin', 'Selesai', '2025-02-10', '2025-02-10 04:08:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `fullname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`fullname`, `email`, `password`) VALUES
('Yan7777', 'adikkikin40@gmail.com', '$2y$10$AT3LTDmkclxli2oSOhmiz.3Hk26sTwyZKy5Ud.Kx0GbkR1pFOpjcW'),
('Yan123', 'adikikin40@gmail.com', '$2y$10$ttG44Of9VzgKnwY4etnXmuoctneYhNp0i1EuIrqnCfYAhbM3EURGS'),
('Yan123333332', 'ramadhanhian@gmail.com', '$2y$10$Lau7Cx7dnz3XByTMumn1duCRQsjvrXM.cP694h0amOczodY2WQ5Wq'),
('Yan', 'yan@gmail.com', '$2y$10$91edHWAxvahbXRtkPPh14OXdUU7T2aD6ZSB2zCz0ohTlipAf0Ri4e'),
('Yan7', 'ramadhanhisan@gmail.com', '$2y$10$clRH02B3cyMMeyaGfehiNuZN9jOqZNOcG1/Hx/oB4z/e1uQka5I2q'),
('1', '1@1', '$2y$10$Wziljc8TuxM70oBFMJE7MuivzrDrzORqlloznywva5GzbPjm6ixSC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userss`
--

CREATE TABLE `userss` (
  `fullname` varchar(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `userss`
--

INSERT INTO `userss` (`fullname`, `username`, `email`, `password`) VALUES
('', '', 'yaya@gmail.com', '$2y$10$No2CT1oawrpduqU72J1fQON7JF78WoafIDcRf1qx8OiwW8Io'),
('yan mulyanaa', 'yannxxyy_17', 'adikikin40@gmail.com', '$2y$10$/Od9ktzLOHPvUozQPr36bezpZuJYBs0eWro3D2VcYpfIR2QT'),
('Yan', 'yannxxyy17', 'adikikin400@gmail.com', '$2y$10$ckbEB.BIzExTTRUptHeureHHRyLkO19kt6Mghb2UtvL2hZ1m'),
('dias kun', 'kundias', 'adi@gmail.com', '$2y$10$xmq2SofWUt7vc6ghs6lS4e2XqyNKNcI6nqRheI.iTgFn645C'),
('YANNXY', 'YANXYZ', 'adiL@gmail.com', '$2y$10$6OaA4uXaFlk1yQ15Mp9BhOBkjKjWcqXS1lageguFV7PqvLIl'),
('adiki', 'dias kunn', 'adiki@gmail.com', '$2y$10$lwZl70LkGKadVgbrTTluOupnKccNEQqDY1dUy7gtVW.LTkPS'),
('DIASSS', 'KUN', 'adikiN@gmail.com', '$2y$10$fVZlMSCoUQD0f6jkuAc9aukZ3I5J2AZ1nH68KJ9EGLBIX8Mn'),
('yannuy', 'uyyan', 'adik@gmail.com', '$2y$10$DEfr7I5og6aGSU9McIZDl.fP.HT03okP7Y4c5P4BuVIXQlRu'),
('yann', 'mul', 'adikk@gmail.com', '$2y$10$IM.jN6ytbqrUtUBY4oGNXOPflEI.Va381hASUsamvyGp9Eq.'),
('yann', 'yanq', 'adikik@gmail.com', '$2y$10$DLDXea.MVueso5aAdEjSJ.HDX5d3Z4tSUnKYb6DNITmfiMIu'),
('dds', 'sdas', 'wert@gmail.com', '$2y$10$6vJ7r/X/FqBqnoVRNLuPwu5G6Wa48YeSYn8kag1J91KBPoKE'),
('t', 'y', 'werrt@gmail.com', '$2y$10$8KOvvV/gf2T8v7Yvu1VfiOWKVVY03sA5aWzW1m4CWfTbF5gJ'),
('adik', 'iyan', 'okk@gmail.com', '$2y$10$n.gQqjwOp.m70g4jea6Sp.vL7VjTrcteqzXTguyV.tYpN1t.'),
('okkkkkk', 'okkkss', 'yannn@gmail.com', '$2y$10$0rRk7JzhRVowtgYYUZXlXu0.rwt9QdQJ7mgBvYGTWgfCvMBp'),
('yan1', 'ok1', 'qw@gmail.com', '$2y$10$y29qSVaQjL8Pn3KBszSylulNxwryTaBy0jfTpBKAL0BxEpCK'),
('Yan Mul', 'mulyana', 'adikikin4000@gmail.com', '$2y$10$VLLyvOsw.jL0PRI71bK35uDUPjWwSmX9tVcCTuwdb7YtJRdz'),
('alka duta', 'dutaaa', 'alka@gmail.com', '$2y$10$jwrgektiYZxbqZfuDfBMVO41r4A6DpPrSZZFLhbLIrCu3MRL'),
('Mulyana', 'Yana', 'yana@gmail.com', '$2y$10$ver3lhrPS4jG10cEHemYE.amSRKl7ZoonPso3rrnSxbDmktH'),
('ujang', 'bedil', 'bedil@gmail.com', '$2y$10$POmy0vAsCaBEn8SubUDgju44aTp6R2HbreIgx2cLaF7/RAGa'),
('aaa', 'aaaa', 'aa@gmail.com', '$2y$10$D52fR2FzhMi74DfZeCb96.fhCwr0RNODjtEFLFSO/wQCWvHe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `subtasks`
--
ALTER TABLE `subtasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `task_id` (`task_id`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `subtasks`
--
ALTER TABLE `subtasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `subtasks`
--
ALTER TABLE `subtasks`
  ADD CONSTRAINT `subtasks_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
