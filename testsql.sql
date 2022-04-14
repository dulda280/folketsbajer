
USE `folketsbajer_database`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `voting_bajer`;
CREATE TABLE IF NOT EXISTS `voting_bajer` (
`id` int(11),
`votevalue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `voting_bajer`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `voting_bajer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
