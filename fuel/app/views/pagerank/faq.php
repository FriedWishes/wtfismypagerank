<section id="what">
	<h1>WTF Is This?</h1>
	<p>
		<?php echo \Html::anchor('/', 'WTF Is My Page Rank'); ?> is a simple
		tool offering webmasters the ability to check their Page Rank.
	</p>
</section>
<section id="pagerank">
	<h1>WTF Is A Page Rank?</h1>
	<p>
		Page Rank (AKA PR) is the term Google created in reference to their
		algorithm which ranks web pages. The term Page Rank is derived from the
		co-founder of Google, "Larry Page", who along with Sergey Brin developed
		this algorithm.
	</p>
	<p>
		Page Rank is a scale that Google uses internally to value the importance
		of each and every web page. The <em>exact</em> Page Rank of web pages
		is not published, Google does however report whole value numbers based
		on a 0-10 scale. It's worth noting that the real Page Rank may have a
		much higher range such as between zero to one million and/or may even
		use decimal points. Such knowledge is patented to Standford University.
	</p>
	<p>
		Page Rank is a voting structure that calculates the important of web
		pages by the number of incoming links to them. Normally, the more
		incoming links a page has, the higher it's Page Rank value will be;
		however, the Page Rank algorithm is rather complex and will take into
		account other factors such as internal link structures as well as
		popularity of the web sites linking to the site in question.
	</p>
	<p>
		Normally, internal pages of websites will have incrementally lower
		values based on their degrees of separation from the home page. For
		example, if the one main page has a PR4, it is very likely that the
		internal pages, which are one click away from the home page, will be
		assigned a Page Rank of 3. This is of course not a hard and fast rule,
		as the internal link structure of a site will have an impact on how
		the Page Rank 'flows' through the pages of a site. At times, many
		internal pages may have a value equal to that of the main page or have
		no Page Rank at all. To get the highest possible Page Rank for all the
		important pages, it is helpful to cross link all your important
		pages to one another. It is especially important to have links from
		your main page to your important pages. It is also recommended that
		your home page have a link from all of your internal pages.
	</p>
	<p>
		It is important to note that the Google Toolbar (the method by which
		we obtain your Page Rank) does not always display your latest Page Rank
		value, as the public data is only updated every 3 to 4 months. We also
		take certain measures to test the data we retrieve against several other
		data centers to try to get a more accurate representation of the current
		Google Page Rank for a site or page, but the most accurate number will
		always be hidden away in a Google database.
	</p>
	<p>
		Most websites will less than 100 links will have a PR value between 3 to
		5, but also remember that it is not only the number of links which is
		important, but also the quality of those links. For examle, it may be
		possible to get a PR6 by having just one link from a PR7 or a PR8
		website. It is a difficult task to achieve a Page Rank higher than 6
		without having hundreds of thousands of links or a few links from high
		PR sites. There are currently less than 150 websites which have a PR10.
	</p>
	<p>
		Sites with a higher Page Rank will normally have a better Google ranking
		for keywords appearing on their websites; however, Page Rank is not the
		only ranking factor. Other factors may include: keywords in title tags,
		keywords in page content, and keywords in the anchor text of incoming
		links.
	</p>
	<p>
		For further reading on Page Rank algorithm see
		<a href="http://en.wikipedia.org/wiki/PageRank">Wikipedia</a>.
	</p>
</section>

<section id="else">
	<h1>Anything Else?</h1>
	<p>
		The <?php echo \Html::anchor('http://ninjarite.com', 'Ninjarite Development Group'); ?>
		has a handful of micro sites that we've developed to make your online
		life better, perhaps you'd like to try some of them?
	</p>
	<ul>
		<li><?php echo \Html::anchor('http://imgbox.us', 'Free Image Hosting'); ?></li>
		<li><?php echo \Html::anchor('http://pastecode.com', 'Paste Code'); ?></li>
		<li><?php echo \Html::anchor('http://anonsurf.org', 'Anonymous Proxy'); ?></li>
	</ul>
</section>