<?php
namespace Blocks;

/**
 * Content functions
 */
class ContentVariable
{
	/* BLOCKSPRO ONLY */

	/**
	 * Gets sections.
	 *
	 * @param array $params
	 * @return array
	 */
	public function sections($params = array())
	{
		return blx()->content->getSections($params);
	}

	/**
	 * Gets the total number of sections.
	 *
	 * @param array $params
	 * @return int
	 */
	public function totalSections($params = array())
	{
		return blx()->content->getTotalSections($params);
	}

	/**
	 * Gets a section by its ID.
	 *
	 * @param int $id
	 * @return Section
	 */
	public function getSectionById($id)
	{
		return blx()->content->getSectionById($id);
	}

	/* end BLOCKSPRO ONLY */
}
