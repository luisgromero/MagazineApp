<?php

class Issue extends MY_Model{
    const DB_TABLE="issues";
    const DB_TABLE_PK="issue_id";
    /**
     * Issue unique identifier
     * @var int
     */
    public $issue_id;
     /**
     * Publication unique identifier
     * @var int
     */
    public $publication_id;
     /**
     * Publication assigned issue number
     * @var int
     */
    public $issue_number;
     /**
     * Date issue was published
     * @var string
     */
    public $issue_date_publication;
     /**
     * Path to the file containing the issue cover image
     * @var string
     */
    public $issue_cover;
}
