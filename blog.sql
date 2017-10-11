-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2017 at 01:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motika`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_name`) VALUES
(1, 'APPS'),
(2, 'GADGETS'),
(3, 'CLOUD');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_name` text NOT NULL,
  `post_content` text NOT NULL,
  `image` text NOT NULL,
  `image1` text NOT NULL,
  `visits` int(5) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `post_content`, `image`, `image1`, `visits`, `cat_id`) VALUES
(141, 'AOL Instant Messenger is shutting down after 20 years', '<p>The pioneering chat app that taught us to text is pulling the plug. On December 15th, AOL Instant Messenger will shut down after running&nbsp;<a href=\"https://twitter.com/aim/status/916290747850264577\" rel=\"noopener\" target=\"_blank\">since</a>&nbsp;1997. AIM dominated online chat in North America at the turn of the century. But with SMS and social apps like Facebook and WhatsApp having conquered chat, AOL is giving up the fight with no planned replacement.</p>\r\n\r\n<p>e know there are so many loyal fans who have used AIM for decades; and we loved working and building the first chat app of its kind since 1997,&rdquo; AOL wrote on the&nbsp;<a href=\"https://help.aol.com/articles/aim-discontinued\" rel=\"noopener\" target=\"_blank\">AIM help page</a>. &ldquo;Our focus will always be on providing the kind of innovative experiences consumers want. We&rsquo;re more excited than ever to focus on building the next generation of iconic brands and life-changing products.&rdquo;</p>\r\n\r\n<p>TechCrunch reader&nbsp;<a href=\"https://twitter.com/_DanielSinclair\" rel=\"noopener\" target=\"_blank\">Daniel Sinclair</a>&nbsp;tipped the shut-down to us, which follows the&nbsp;<a href=\"https://www.engadget.com/2017/03/01/aol-starts-to-shut-down-third-party-aim-apps/\" rel=\"noopener\" target=\"_blank\">cut-off</a>&nbsp;of third-party apps back in March. Now AIM&rsquo;s official MacOS, Windows,&nbsp;<a href=\"https://twitter.com/BuzzFeedBen/status/836675627109482496\" rel=\"noopener\" target=\"_blank\">iOS</a>&nbsp;and Android apps are being pulled off life support.</p>\r\n\r\n<p>&ldquo;From setting the perfect away message to that familiar ring of an incoming chat, AIM will always have a special place in our hearts,&rdquo; AOL&nbsp;<a href=\"https://pastebin.com/raw/QxmQAQqh\" rel=\"noopener\" target=\"_blank\">wrote to users in an email</a>. People can download images they sent until December 15th, but the app&rsquo;s download links will start disappearing now. Unfortunately there&rsquo;s no way to save or port your buddy list.</p>\r\n\r\n<p>Initially the chat experience built into AOL desktop, AIM launched as a standalone app in 1997. Its iconic Away Messages were the ancestor to the modern tweet and status update. It battled for supremacy with competitors like ICQ, and messengers from Yahoo and Microsoft MSN. But eventually text messaging, Google&rsquo;s GChat and Facebook took over, while AIM never fully figured out the shift to mobile. That led to AOL&rsquo;s fall from grace, going from being valued at $224 billion in today&rsquo;s money to just $4.4 billion when it was sold to Verizon in 2015. For context on the business AOL let slip away, WhatsApp sold that same year to Facebook for more than $19 billion.</p>\r\n', '59da232e0b8248.67428929.png', '59da232e17ab10.11359679.png', 4, 1),
(142, 'Facebook quietly launches Mac and PC Workplace Chat apps with screen share', '<p>TechCrunch has discovered that Facebook has stealthily launched official desktop PC and Mac chat apps with screen sharing &mdash; two features users have been begging for. Right now, they&rsquo;re only available for Workplace, Facebook&rsquo;s enterprise collaboration software that competes with Slack and other business apps. But users would surely enjoy if the consumer Messenger app got its own desktop app and screen sharing options one day.</p>\r\n\r\n<p><a href=\"https://techcrunch.com/2016/10/10/facebook-workplace/\" rel=\"noopener\" target=\"_blank\">Workplace</a>&nbsp;has over&nbsp;<a href=\"https://techcrunch.com/2017/09/26/workplace-facebooks-enterprise-edition-snaps-up-walmart-as-a-customer/\" rel=\"noopener\" target=\"_blank\">14,000 businesses on board</a>&nbsp;paying $1 to $3 per user, and recently signed up Wal-Mart. Screensharing could help Workplace attract more clients and disrupt the clunky screen sharing of enterprise apps like Skype and WebEx. It&rsquo;s clear that Facebook is applying its rapid development style in an bid to conquer offices with an all-in-one collaboration app while competitors only offer a piece of the puzzle.</p>\r\n', '59da2368d57313.99683071.png', '59da2368d5b010.33431968.png', 6, 1),
(143, 'Download the new, completely redesigned TechCrunch mobile app', '<p>Rather than recreate our mobile website as an app, we decided to focus on the things that native mobile apps can do better than mobile web that can benefit readers. The new app sports a modernized interface that is fast and fun to interact with, and has conveniences like offline sync and personalized push notifications baked-in, front and center.</p>\r\n\r\n<p>One of the biggest changes with the new app is that you can now customize your experience by selecting topics that interest you most. Once you pick your topics, you&rsquo;ll not only get a personalized section of news within the app, you&rsquo;ll also be able to get push notifications for breaking news related to your chosen topics. This ensures that you&rsquo;ll be the first to know about big stories that matter to you, and will also save you time when browsing our stories.</p>\r\n\r\n<p>We&rsquo;ve added a &ldquo;save for later&rdquo; feature because we know you don&rsquo;t always have time to read news right when it breaks. The &ldquo;save for later&rdquo; feature will let you access articles even when you are offline, so you can catch up on the plane, subway or anywhere you are.</p>\r\n\r\n<p>Crunchbase data profiles have also been included in the new version of the app to add additional context to the stories you read. The data profiles are visible at the bottom of each article and can be expanded to read more about the company included within the article.</p>\r\n', '59da2392b229d4.70730899.jpg', '59da2392b2a3e2.90184531.jpg', 6, 1),
(144, 'Germans are doing deep scans of ancient instruments to uncover their secrets', '<p>I don&rsquo;t know if you&rsquo;re into baroque music, but I can tell you that Germans sure are. So it&rsquo;s no surprise that German R&amp;D outfit Fraunhofer has turned its considerable resources towards learning about and conserving every little detail of the instruments for which the likes of Bach and Handel composed their music. Specifically, they&rsquo;re&nbsp;<a href=\"https://www.fraunhofer.de/en/press/research-news/2017/October/looking-inside-the-basset-horn.html\" rel=\"noopener\" target=\"_blank\">putting them into an enormous x-ray machine</a>.</p>\r\n\r\n<p>There are thousands of such instruments, from woodwinds to pianos, but many of them are too valuable to take apart, or too fragile to display.</p>\r\n\r\n<p>For a country whose history is so rich in music, it is a shame that the artifacts of such a critical period like the baroque should be locked away. It&rsquo;s the same way with other museums, which only have so much space to show their collections &mdash; so why not digitize them and show them off that way?</p>\r\n\r\n<p>In order to study and perhaps replicate these historic instruments, researchers created the Musical Instrument Computed tomography Examination Standard, or&nbsp;<a href=\"http://www.gnm.de/en/research/research-projects/musices/\" rel=\"noopener\" target=\"_blank\">MUSICES</a>.</p>\r\n', '59da24423f01e2.46630583.jpg', '59da2442552e20.75185354.jpg', 5, 2),
(145, 'Benchmarks contradict â€˜Apple slowed down my iPhoneâ€™ claims', '<p>It&rsquo;s a refrain we all hear every year around September: &ldquo;I swear, whenever they release a new iPhone, Apple makes all the old ones run worse to make you upgrade.&rdquo; But thousands of performance tests conducted over the years by Futuremark users show that the conspiracy is mostly in your mind.</p>\r\n\r\n<p>If you don&rsquo;t know Futuremark, it&rsquo;s the company behind the benchmark software 3DMark (<a href=\"https://www.futuremark.com/benchmarks\" rel=\"noopener\" target=\"_blank\">among others</a>), which for years has been a standby for testing how devices from gaming PCs to phones perform.</p>\r\n\r\n<p>3DMark has the device render demanding 3D scenes that stress different parts of the hardware, and tracks how quickly it calculates, how many frames per second it renders and so on. At the end, it combines all those metrics into a single score that&rsquo;s easy to compare between devices or cards.</p>\r\n\r\n<p>In the case of the iPhone (for which 3DMark is a free download if you&rsquo;d like to try it), power users and reviewers run it (and other benchmarks like it) to see whether updates or apps affect their device&rsquo;s performance. Futuremark stores those scores for comparisons&nbsp;<a href=\"https://www.futuremark.com/pressreleases/is-it-true-that-iphones-get-slower-over-time\" rel=\"noopener\" target=\"_blank\">like the one released today</a>.</p>\r\n', '59da2479294fa7.21808086.jpg', '59da247929c9c1.10741488.jpg', 0, 2),
(146, 'This smart bandage releases meds on command for better healing', '<p>Taking care of a cut or scrape usually means swapping out the bandage a few times, and maybe putting a little healing cream or hydrogel on there. But what if the dressing could dispense that stuff on its own? That&rsquo;s the idea behind a smart bandage now being tested by engineers from the University of Nebraska-Lincoln, Harvard and MIT.</p>\r\n\r\n<p>Instead of plain sterile cotton or other fibers, this dressing is made of &ldquo;composite fibers with a core electrical heater covered by a layer of hydrogel containing thermoresponsive drug carriers,&rdquo; which really says it all.</p>\r\n\r\n<p>&nbsp;acts as a regular bandage, protecting the injury from exposure and so on, but attached to it is a stamp-sized microcontroller. When prompted by an app (or an onboard timer, or conceivably sensors woven into the bandage), the microcontroller sends a voltage through certain of the fibers, warming them and activating the medications lying dormant in the hydrogel.</p>\r\n\r\n<p>Those medications could be anything from topical anesthetics to antibiotics to more sophisticated things like growth hormones that accelerate healing. More voltage, more medication &mdash; and each fiber can carry a different one.</p>\r\n\r\n<p>&ldquo;This is the first bandage that is capable of dose-dependent drug release,&rdquo; said UN-L&rsquo;s Ali Tamayol&nbsp;<a href=\"http://news.unl.edu/newsrooms/today/article/smart-bandage-could-promote-better-faster-healing/\" rel=\"noopener\" target=\"_blank\">in a news release</a>. &ldquo;You can release multiple drugs with different release profiles. That&rsquo;s a big advantage in comparison with other systems.&rdquo;</p>\r\n\r\n<p>In a paper&nbsp;<a href=\"http://onlinelibrary.wiley.com/doi/10.1002/adfm.201702399/full\" rel=\"noopener\" target=\"_blank\">published in the journal Advanced Functional Materials</a>, the team documents how in tests, critters (not humans &mdash; those tests come later) healed better when given the active bandage. They also made sure that the heat didn&rsquo;t affect the healing process or the medication.</p>\r\n\r\n<p>For ordinary scrapes a normal bandage (or plaster, for our friends across the pond) is probably still more than sufficient &mdash; this is for people whose healing processes are inhibited, or for whom frequent dressing changes are impossible or inconvenient.</p>\r\n\r\n<p>Next up, in addition to further testing to satisfy the FDA, is investigating how to integrate sensors with the fibers, to measure blood glucose levels, pH and other indicators of how the healing process is going. Maybe soon your bandage will even include a progress bar.</p>\r\n', '59da24b4f15823.74409899.jpg', '59da24b50235e1.43231319.jpg', 0, 2),
(147, 'Google Compute Engine goes a little crazy with up to 96 CPU cores and 624 GB of memory', '<p>If you&rsquo;ve got a resource-hungry app,&nbsp;<a href=\"https://cloudplatform.googleblog.com/2017/10/new-compute-engine-machine-types.html?utm_source=feedburner&amp;utm_medium=feed&amp;utm_campaign=Feed:+ClPlBl+(Cloud+Platform+Blog)\" rel=\"noopener\" target=\"_blank\">Google Compute Engine&rsquo;s latest offering</a>&nbsp;has you covered. It lets you dial up to 96 CPUs and an other-worldly 624 GB of memory. Remember Bill Gates allegedly asking who would ever need more than 640K of memory. He obviously didn&rsquo;t see this coming.</p>\r\n\r\n<p>If you think that&rsquo;s a lot, you aren&rsquo;t kidding, and believe it or not it&rsquo;s a big boost from just last March when&nbsp;<a href=\"https://techcrunch.com/2017/03/09/googles-compute-engine-now-offers-machines-with-up-to-64-cpu-cores-416gb-of-ram/\" rel=\"noopener\" target=\"_blank\">GCE announced an offering</a>&nbsp;with 64 CPU cores and 416 GB of memory. Those numbers seem quaint now.</p>\r\n\r\n<p>The chips, as you might expect are the latest&nbsp;<a href=\"https://www.intel.com/content/www/us/en/products/processors/xeon/scalable.html\" rel=\"noopener\" target=\"_blank\">Intel Xeon Scalable processors</a>&nbsp;(which were codenamed Skylake). According to Google, these babies scream with up to 20% faster compute performance, 82% faster high performance computing (HCP) power along with almost two times the memory bandwidth compared with the previous generation of Intel&rsquo;s Xeon line (because you can never have enough performance, can you?).</p>\r\n\r\n<p>If you don&rsquo;t need that much power (what is wrong with you?) or you want to mix and match, depending on what you&rsquo;re running, Google lets you dial up custom CPU and memory configurations to suit your workload requirements.</p>\r\n\r\n<p>The company points out that these new workloads are certified for running SAP HANA workloads. That&rsquo;s the German software giant&rsquo;s in-memory database product and this puppy gives you a heck of a lot of memory if you require it.</p>\r\n\r\n<p>If 624 gigs doesn&rsquo;t meet your needs, fear not. The company is working on products that deliver up to 4TB of memory. Stay tuned, but be sure to have your pocket book open. These surely don&rsquo;t come cheap. Today&rsquo;s model starts at approximately $4.95 per hour.</p>\r\n', '59da255b914306.44438149.jpg', '59da255b9e5ff3.77267482.jpg', 0, 3),
(148, 'Splunk is latest company to take exception to Larry Ellisonâ€™s slams at Oracle OpenWorld', '<p>Larry Ellison was at it again yesterday, making friends, influencing people and pissing off rivals.<a href=\"https://techcrunch.com/2017/10/02/aws-fires-back-at-larry-ellisons-claims-saying-its-just-larry-being-larry/\" rel=\"noopener\" target=\"_blank\">&nbsp;It was AWS</a>&nbsp;in the keynote earlier in the week. Yesterday, it was&nbsp;<a href=\"http://splunk.com/\" rel=\"noopener\" target=\"_blank\">Splunk</a>, a seemingly innocuous logging software company, which somehow fell into Ellison&rsquo;s marketing cross-hairs. The company took serious exception.</p>\r\n\r\n<p>Splunk is best known for logging all events related to IT. Ellison announced a new product &mdash; a unified platform for SecOps, DevOps, and IT Ops &mdash; or precisely Splunk&rsquo;s sweet spot. If you are the market leader in an area where Oracle wants a piece of the pie, you are going to feel the wrath of Ellison and that&rsquo;s what happened to Splunk.</p>\r\n\r\n<p>Oracle didn&rsquo;t exactly try to hide they were going straight after Splunk with their new unified logging product. In fact, senior director of product marketing, Sridhar Karnam penned a blog post called&nbsp;<a href=\"https://blogs.oracle.com/cloudsecurity/oracles-larry-ellison-takes-on-splunk\" rel=\"noopener\" target=\"_blank\">Oracle&rsquo;s Larry Ellison takes on Splunk</a>&nbsp;to announce the product on the company website.</p>\r\n\r\n<p>But that was really the encore. The real show was at Ellison&rsquo;s announcement where he took aim at Splunk with his typical style, making great claims about what his product could do, and of course what his rival was incapable of.</p>\r\n\r\n<p>Splunk fired back in&nbsp;<a href=\"https://www.splunk.com/blog/2017/10/04/splunk-fires-back-at-ludicrous-larry.html\" rel=\"noopener\" target=\"_blank\">an angry blog post</a>&nbsp;you don&rsquo;t usually see from a software company, which runs behind the scenes and generally doesn&rsquo;t call attention to itself except&nbsp;<a href=\"https://techcrunch.com/2017/09/26/splunk-expands-machine-learning-capabilities-across-platform/\" rel=\"noopener\" target=\"_blank\">when there are products to be announced</a>. Splunk had a conference of its own last week, but there wasn&rsquo;t any name calling or corporate pissing matches that I heard about. This is the second such incident for Ellison this week, who thrives on controversy to get his company attention (and it&rsquo;s worked).</p>\r\n\r\n<p>The company seemed quite flabbergasted by Ellison&rsquo;s attacks, yet felt compelled to answer his claims all the same. When Ellison said, &rdquo; Splunk has no real entity model and leaves data in many disparate vendor silos,&rdquo; Splunk responded, &ldquo;Splunk turns data into answers, applying schema on read to give structure to the data when you ask the question and not force entities when you write it (presumably to an Oracle database which is&hellip; again&hellip; convenient),&rdquo; they wrote. What they are saying is Ellison was being misleading when he made that statement.</p>\r\n\r\n<p>Then he took a swipe at their machine learning capabilities saying, &ldquo;Splunk provides a machine learning toolkit that requires data scientists.&rdquo; To which Splunk replied, &ldquo;Just wrong. We make machine data accessible, usable and valuable to everyone and we&rsquo;re doing the same with machine learning.&rdquo; To be fair, he&rsquo;s not completely wrong, but again, he is being misleading.</p>\r\n\r\n<p>When I spoke to the company just recently about its machine learning capabilities, they cited two paths. One was a toolkit that would allow that data scientist to build apps on top of the Splunk data, but the other was designed to provide machine learning capabilities in a more automated fashion for those companies who didn&rsquo;t have data scientists. So they offer both. Ellison just chose to focus on the path that made his company&rsquo;s product look better.</p>\r\n\r\n<p>Just another day at Oracle OpenWorld with Larry Ellison making wild claims and his competitors taking exception. It&rsquo;s only Day Three. It feels like longer.</p>\r\n', '59da2586bd5e88.74830115.jpg', '59da2586bd9b87.64850053.jpg', 0, 3),
(149, 'Cloud computing has demanded a kinder, gentler Oracle', '<p><a href=\"https://www.oracle.com/index.html\" rel=\"noopener\" target=\"_blank\">Oracle</a>&nbsp;has always had a swagger that reflects the public persona of its bombastic leader, Larry Ellison, but over the last several years, as the company has transitioned to the cloud, it has required a transformation to one that is softer and more customer-centric.</p>\r\n\r\n<p>Mind you, this was a company that was the poster child for vendor lock-in the 90s and early 2000s. They knew you were looking for the best-of-breed enterprise database and their sales team knew how to get you hooked on costly maintenance contracts that kept you paying long after the initial sale and filled the company coffers. The cloud may not have completely killed off that model, but it has forced Oracle to play by a very different set of rules.</p>\r\n\r\n<p>Of course, that didn&rsquo;t stop the marketing machine from cranking up at&nbsp;<a href=\"https://www.oracle.com/openworld/index.html\" rel=\"noopener\" target=\"_blank\">Oracle OpenWorld</a>this week, or Ellison himself from&nbsp;<a href=\"https://techcrunch.com/2017/10/02/larry-ellison-pokes-aws-while-unveiling-intelligent-database-service-at-oracle-openworld-keynote/\" rel=\"noopener\" target=\"_blank\">taking a few swings at chief cloud rival AWS</a>&nbsp;(or&nbsp;<a href=\"https://techcrunch.com/2017/10/02/aws-fires-back-at-larry-ellisons-claims-saying-its-just-larry-being-larry/\" rel=\"noopener\" target=\"_blank\">them swiping back)</a>. But if you listened carefully to the messages coming from Oracle execs, there was clearly a shift in emphasis, which all revolved around the customer.</p>\r\n\r\n<p>Interestingly enough, the company has been using its own internal users as a test bed for some of its cloud products. The&nbsp;<a href=\"https://techcrunch.com/2017/10/02/oracle-adds-ai-development-service-to-platform-offerings/\" rel=\"noopener\" target=\"_blank\">new AI tools</a>&nbsp;that were announced this week began as in-house tools to create the company&rsquo;s new line of AI-driven applications. Jack Berkowitz, who is vice president of products and data science at Oracle adaptive intelligence, says his department&rsquo;s job is to test the tools for the company and create applications that &ldquo;reduce the time to value for customers.&rdquo;</p>\r\n\r\n<p>&ldquo;Instead of hiring data scientists and data engineers and deployment specialists and system integrators, we provide those pre built to reduce time to deployment to days or weeks,&rdquo; Berkowitz explained.</p>\r\n\r\n<p>Even if Berkowitz and in-house team are demanding bunch, and they very likely are, it&rsquo;s still not the same dynamic that Oracle faces with a subscribing cloud customer. As Salesforce vice chairman and COO Keith Block, who was once an Oracle executive, puts it, the subscription model puts the customer in control and it takes more than simply delivering a cloud product to put the focus on the customer&rsquo;s needs.</p>\r\n\r\n<p>&ldquo;In the other companies who are in the perpetual license world &mdash; they can sell a lot of software up front and charge maintenance for it and you don&rsquo;t get a lot of innovation for that and the risk is really on the customer, whereas in our model it is a &lsquo;joint success model&rsquo;,&rdquo; Block told TechCrunch&nbsp;<a href=\"https://techcrunch.com/2016/05/01/keith-block-talks-life-at-salesforce-and-being-a-boston-sports-fan-in-san-francisco/\" rel=\"noopener\" target=\"_blank\">in an interview last year</a>.</p>\r\n\r\n<p>Oracle was born and raised in that perpetual license world, and while it&rsquo;s made the shift to cloud services from a strictly on-prem approach, understanding the nuances of the cloud-subscription relationship could take a bit longer to understand (if they ever truly do).</p>\r\n\r\n<p>While the cloud business is growing quickly &mdash; revenue from SaaS was up 62 percent in the&nbsp;<a href=\"http://investor.oracle.com/financial-news/financial-news-details/2017/Q1-FY18-GAAP-EPS-UP-19-TO-052-and-NON-GAAP-EPS-UP-12-TO-062/default.aspx\" rel=\"noopener\" target=\"_blank\">most recent earnings report&nbsp;</a>last month &mdash; it&rsquo;s easier to grow a big number when you have a small percentage of the market. The cloud business provided a healthy $1.47 billion for the quarter, but that figure represented only a fraction of the company&rsquo;s 9.21 billion overall revenue.</p>\r\n', '59da25bc609fd3.08048094.jpg', '59da25bc60dce1.07901772.jpg', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk_post_cat` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_post_cat` FOREIGN KEY (`cat_id`) REFERENCES `cat` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
