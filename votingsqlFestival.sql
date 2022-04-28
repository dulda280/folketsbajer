
USE `folketsbajer_database`;

-- --------------------------------------------------------

--
--

DROP TABLE IF EXISTS `voting_festival`;
CREATE TABLE IF NOT EXISTS `voting_festival` (
`id` text NOT NULL,
`votevalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

