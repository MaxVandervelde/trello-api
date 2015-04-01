<?php

namespace InkApplications\TrelloApi\Board;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use InkApplications\TrelloApi\Board\Preferences;

class Board
{
    /**
     * A unique identifier for the board.
     *
     * @SerializedName("id")
     * @Type("string")
     * @var string
     */
    private $id;

    /**
     * The user defined name of the board.
     *
     * @SerializedName("name")
     * @Type("string")
     * @var string
     */
    private $name;

    /**
     * The user defined description of the board.
     *
     * @SerializedName("desc")
     * @Type("string")
     * @var string
     */
    private $description;

    /**
     * Whether the board has been archived by the user.
     *
     * @SerializedName("closed")
     * @Type("boolean")
     * @var boolean
     */
    private $closed;

    /**
     * The ID of the organization that this board belongs to, if any.
     *
     * @SerializedName("idOrganization")
     * @Type("string")
     * @var string|null
     */
    private $organizationId;

    /**
     * Whether the user has pinned/favorited the board.
     *
     * @SerializedName("pinned")
     * @Type("boolean")
     * @var boolean
     */
    private $pinned;

    /**
     * The URL for access to the board on Trello.
     *
     * @SerializedName("url")
     * @Type("string")
     * @var string
     */
    private $url;

    /**
     * A short version of the board's URL to access the board on Trello.
     *
     * @SerializedName("shortUrl")
     * @Type("string")
     * @var string
     */
    private $shortUrl;

    /**
     * A group of configuration options for the board.
     *
     * @SerializedName("prefs")
     * @Type("InkApplications\TrelloApi\Board\Preferences")
     * @var Preferences
     */
    private $preferences;

    /**
     * A key => value array of labels on the board.
     *
     * Key is the color of the label, and the value is the name of the label.
     *
     * @SerializedName("labelNames")
     * @Type("array<string, string>")
     * @var array
     */
    private $labels;

    /**
     * @return string A unique identifier for the board.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id A unique identifier for the board.
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string The user defined name of the board.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name The user defined name of the board.
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string The user defined description of the board.
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description The user defined description of the board.
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return boolean Whether the board has been archived by the user.
     */
    public function isClosed()
    {
        return $this->closed;
    }

    /**
     * @param boolean $closed Whether the board has been archived by the user.
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;
    }

    /**
     * @return null|string The ID of the organization that this board belongs to, if any.
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * @param null|string $organizationId The ID of the organization that this
     *     board belongs to, if any.
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
    }

    /**
     * @return boolean Whether the user has pinned/favorited the board.
     */
    public function isPinned()
    {
        return $this->pinned;
    }

    /**
     * @param boolean $pinned Whether the user has pinned/favorited the board.
     */
    public function setPinned($pinned)
    {
        $this->pinned = $pinned;
    }

    /**
     * @return string The URL for access to the board on Trello.
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url The URL for access to the board on Trello.
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string A short version of the board's URL to access the board on Trello.
     */
    public function getShortUrl()
    {
        return $this->shortUrl;
    }

    /**
     * @param string $shortUrl A short version of the board's URL to access the
     *     board on Trello.
     */
    public function setShortUrl($shortUrl)
    {
        $this->shortUrl = $shortUrl;
    }

    /**
     * @return Preferences A group of configuration options for the board.
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * @param Preferences $preferences A group of configuration options for the board.
     */
    public function setPreferences($preferences)
    {
        $this->preferences = $preferences;
    }

    /**
     * Get labels available on the board.
     *
     * Key is the color of the label, and the value is the name of the label.
     *
     * @return array A key=>value array of color=>labels on the board.
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Get labels available on the board.
     *
     * Key is the color of the label, and the value is the name of the label.
     *
     * @param array $labels A key=>value array of color=>labels on the board.
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }
}
