<?php

namespace InkApplications\TrelloApi\Board;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Preferences
{
    /**
     * What group of users are allowed to access the board.
     *
     * @SerializedName("permissionLevel")
     * @Type("string")
     * @var string
     * @see PermissionLevel
     */
    private $permissionLevel;

    /**
     * What group of users are allowed to vote on this boards cards.
     *
     * @SerializedName("voting")
     * @Type("string")
     * @var string
     * @see Voting
     */
    private $voting;

    /**
     * What group of users are allowed to comment on this board's cards.
     *
     * @SerializedName("comments")
     * @Type("string")
     * @var string
     * @see Comments
     */
    private $comments;

    /**
     * What group of users are allowed to invite new users to the board.
     *
     * @SerializedName("invitations")
     * @Type("string")
     * @var string
     * @see Invitations
     */
    private $invitations;

    /**
     * Whether a user can join the board by themselves, assuming they have
     * permissions to see it.
     *
     * @SerializedName("selfJoin")
     * @Type("boolean")
     * @var boolean
     */
    private $selfJoin;

    /**
     * @todo Docs -- No idea what this does.
     * @SerializedName("cardCovers")
     * @Type("boolean")
     * @var boolean
     */
    private $cardCovers;

    /**
     * Defines the style that cards age.
     *
     * @SerializedName("cardAging")
     * @Type("string")
     * @var string
     * @see CardAging
     */
    private $cardAging;

    /**
     * @todo Docs -- No idea what this does.
     * @SerializedName("calendarFeedEnabled")
     * @Type("boolean")
     * @var boolean
     */
    private $calendarFeedEnabled;

    /**
     * A standard background name, or the id of a custom background.
     *
     * @SerializedName("background")
     * @Type("string")
     * @var string
     */
    private $background;

    /**
     * A specific background color hex value to be used for the board.
     *
     * @SerializedName("backgroundColor")
     * @Type("string")
     * @var string
     */
    private $backgroundColor;

    /**
     * An image URL to use as the board background, if available.
     *
     * @SerializedName("backgroundImage")
     * @Type("string")
     * @var string|null
     */
    private $backgroundImage;

    /**
     * An image URL to use as the board background, if available.
     *
     * @todo Docs -- Find out if this is "scaled" larger or smaller.
     * @SerializedName("backgroundImageScaled")
     * @Type("string")
     * @var string|null
     */
    private $backgroundImageScaled;

    /**
     * Whether the background should be repeated ("tiled") when it ends.
     *
     * @SerializedName("backgroundTile")
     * @Type("boolean")
     * @var boolean
     */
    private $backgroundTile;

    /**
     * @todo Docs -- No idea what this is.
     * @SerializedName("backgroundImageBrightness")
     * @Type("string")
     * @var string
     */
    private $backgroundBrightness;

    /**
     * @todo Docs -- No idea what this is.
     * @SerializedName("canBePublic")
     * @Type("boolean")
     * @var boolean
     */
    private $canBePublic;

    /**
     * @todo Docs -- No idea what this is.
     * @SerializedName("canBeOrg")
     * @Type("boolean")
     * @var boolean
     */
    private $canBeOrg;

    /**
     * @todo Docs -- No idea what this is.
     * @SerializedName("canBePrivate")
     * @Type("boolean")
     * @var boolean
     */
    private $canBePrivate;

    /**
     * @todo Docs -- No idea what this is.
     * @SerializedName("canInvite")
     * @Type("boolean")
     * @var boolean
     */
    private $canInvite;

    /**
     * @see PermissionLevel
     * @return string What group of users are allowed to access the board.
     */
    public function getPermissionLevel()
    {
        return $this->permissionLevel;
    }

    /**
     * @see PermissionLevel
     * @param string $permissionLevel What group of users are allowed to access
     *     the board.
     */
    public function setPermissionLevel($permissionLevel)
    {
        $this->permissionLevel = $permissionLevel;
    }

    /**
     * @see Voting
     * @return string What group of users are allowed to vote on this boards cards.
     */
    public function getVoting()
    {
        return $this->voting;
    }

    /**
     * @see Voting
     * @param string $voting What group of users are allowed to vote on this
     *     boards cards.
     */
    public function setVoting($voting)
    {
        $this->voting = $voting;
    }

    /**
     * @see Comments
     * @return string What group of users are allowed to comment on this board's cards.
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @see Comments
     * @param string $comments What group of users are allowed to comment on
     *     this board's cards.
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @see Invitations
     * @return string What group of users are allowed to invite new users to the board.
     */
    public function getInvitations()
    {
        return $this->invitations;
    }

    /**
     * @see Invitations
     * @param string $invitations What group of users are allowed to invite new
     *     users to the board.
     */
    public function setInvitations($invitations)
    {
        $this->invitations = $invitations;
    }

    /**
     * @return boolean Whether a user can join the board by themselves,
     *     assuming they have permissions to see it.
     */
    public function isSelfJoin()
    {
        return $this->selfJoin;
    }

    /**
     * @param boolean $selfJoin boolean Whether a user can join the board by
     *     themselves, assuming they have permissions to see it.
     */
    public function setSelfJoin($selfJoin)
    {
        $this->selfJoin = $selfJoin;
    }

    /**
     * @return boolean
     */
    public function isCardCovers()
    {
        return $this->cardCovers;
    }

    /**
     * @param boolean $cardCovers
     */
    public function setCardCovers($cardCovers)
    {
        $this->cardCovers = $cardCovers;
    }

    /**
     * @see CardAging
     * @return string Defines the style that cards age.
     */
    public function getCardAging()
    {
        return $this->cardAging;
    }

    /**
     * @see CardAging
     * @param string $cardAging Defines the style that cards age.
     */
    public function setCardAging($cardAging)
    {
        $this->cardAging = $cardAging;
    }

    /**
     * @return boolean
     */
    public function isCalendarFeedEnabled()
    {
        return $this->calendarFeedEnabled;
    }

    /**
     * @param boolean $calendarFeedEnabled
     */
    public function setCalendarFeedEnabled($calendarFeedEnabled)
    {
        $this->calendarFeedEnabled = $calendarFeedEnabled;
    }

    /**
     * @return string A standard background name, or the id of a custom background.
     */
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * @param string $background A standard background name, or the id of a
     *     custom background.
     */
    public function setBackground($background)
    {
        $this->background = $background;
    }

    /**
     * @return string A specific background color hex value to be used for the board.
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor A specific background color hex value to
     *     be used for the board.
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @return null|string An image URL to use as the board background, if available.
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }

    /**
     * @param null|string $backgroundImage An image URL to use as the board
     *     background, if available.
     */
    public function setBackgroundImage($backgroundImage)
    {
        $this->backgroundImage = $backgroundImage;
    }

    /**
     * @return null|string An image URL to use as the board background, if available.
     */
    public function getBackgroundImageScaled()
    {
        return $this->backgroundImageScaled;
    }

    /**
     * @param null|string $backgroundImageScaled An image URL to use as the
     *     board background, if available.
     */
    public function setBackgroundImageScaled($backgroundImageScaled)
    {
        $this->backgroundImageScaled = $backgroundImageScaled;
    }

    /**
     * @return boolean Whether the background should be repeated ("tiled") when it ends.
     */
    public function isBackgroundTile()
    {
        return $this->backgroundTile;
    }

    /**
     * @param boolean $backgroundTile Whether the background should be
     *     repeated ("tiled") when it ends.
     */
    public function setBackgroundTile($backgroundTile)
    {
        $this->backgroundTile = $backgroundTile;
    }

    /**
     * @return string
     */
    public function getBackgroundBrightness()
    {
        return $this->backgroundBrightness;
    }

    /**
     * @param string $backgroundBrightness
     */
    public function setBackgroundBrightness($backgroundBrightness)
    {
        $this->backgroundBrightness = $backgroundBrightness;
    }

    /**
     * @return boolean
     */
    public function isCanBePublic()
    {
        return $this->canBePublic;
    }

    /**
     * @param boolean $canBePublic
     */
    public function setCanBePublic($canBePublic)
    {
        $this->canBePublic = $canBePublic;
    }

    /**
     * @return boolean
     */
    public function isCanBeOrg()
    {
        return $this->canBeOrg;
    }

    /**
     * @param boolean $canBeOrg
     */
    public function setCanBeOrg($canBeOrg)
    {
        $this->canBeOrg = $canBeOrg;
    }

    /**
     * @return boolean
     */
    public function isCanBePrivate()
    {
        return $this->canBePrivate;
    }

    /**
     * @param boolean $canBePrivate
     */
    public function setCanBePrivate($canBePrivate)
    {
        $this->canBePrivate = $canBePrivate;
    }

    /**
     * @return boolean
     */
    public function isCanInvite()
    {
        return $this->canInvite;
    }

    /**
     * @param boolean $canInvite
     */
    public function setCanInvite($canInvite)
    {
        $this->canInvite = $canInvite;
    }
}
