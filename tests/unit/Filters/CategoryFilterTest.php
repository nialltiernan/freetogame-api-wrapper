<?php
declare(strict_types=1);

namespace unit\Filters;

use Codeception\Test\Unit;
use FreeToGame\Filters\CategoryFilter;
use FreeToGame\Filters\SearchTerms\Action;
use FreeToGame\Filters\SearchTerms\ActionRolePlayingGame;
use FreeToGame\Filters\SearchTerms\Anime;
use FreeToGame\Filters\SearchTerms\BattleRoyale;
use FreeToGame\Filters\SearchTerms\Card;
use FreeToGame\Filters\SearchTerms\Fantasy;
use FreeToGame\Filters\SearchTerms\Fighting;
use FreeToGame\Filters\SearchTerms\FirstPerson;
use FreeToGame\Filters\SearchTerms\Flight;
use FreeToGame\Filters\SearchTerms\Horror;
use FreeToGame\Filters\SearchTerms\LowSpecifications;
use FreeToGame\Filters\SearchTerms\MartialArts;
use FreeToGame\Filters\SearchTerms\MassivelyMultiplayerOnline;
use FreeToGame\Filters\SearchTerms\MassivelyMultiplayerOnlineFirstPersonShooter;
use FreeToGame\Filters\SearchTerms\MassivelyMultiplayerOnlineRealTimeStrategy;
use FreeToGame\Filters\SearchTerms\MassivelyMultiplayerOnlineRolePlayingGame;
use FreeToGame\Filters\SearchTerms\MassivelyMultiplayerOnlineThirdPersonShooter;
use FreeToGame\Filters\SearchTerms\Military;
use FreeToGame\Filters\SearchTerms\MultiplayerOnlineBattleArena;
use FreeToGame\Filters\SearchTerms\OpenWorld;
use FreeToGame\Filters\SearchTerms\Permadeath;
use FreeToGame\Filters\SearchTerms\Pixel;
use FreeToGame\Filters\SearchTerms\PlayerVersusEnvironment;
use FreeToGame\Filters\SearchTerms\PlayerVersusPlayer;
use FreeToGame\Filters\SearchTerms\Racing;
use FreeToGame\Filters\SearchTerms\Sailing;
use FreeToGame\Filters\SearchTerms\Sandbox;
use FreeToGame\Filters\SearchTerms\ScienceFiction;
use FreeToGame\Filters\SearchTerms\Shooter;
use FreeToGame\Filters\SearchTerms\SideScroller;
use FreeToGame\Filters\SearchTerms\Social;
use FreeToGame\Filters\SearchTerms\Space;
use FreeToGame\Filters\SearchTerms\Sports;
use FreeToGame\Filters\SearchTerms\Strategy;
use FreeToGame\Filters\SearchTerms\Superhero;
use FreeToGame\Filters\SearchTerms\Survival;
use FreeToGame\Filters\SearchTerms\Tank;
use FreeToGame\Filters\SearchTerms\ThirdPerson;
use FreeToGame\Filters\SearchTerms\ThreeDimensions;
use FreeToGame\Filters\SearchTerms\TopDown;
use FreeToGame\Filters\SearchTerms\TowerDefense;
use FreeToGame\Filters\SearchTerms\TurnBased;
use FreeToGame\Filters\SearchTerms\TwoDimensions;
use FreeToGame\Filters\SearchTerms\Voxel;
use FreeToGame\Filters\SearchTerms\Zombie;

class CategoryFilterTest extends Unit
{

    /** @test */
    public function getKey()
    {
        $filter = new CategoryFilter(new Shooter());

        $this->assertEquals('category', $filter->getKey());
    }

    /** @test */
    public function action()
    {
        $searchTerm = new Action();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function actionRolePlaying()
    {
        $searchTerm = new ActionRolePlayingGame();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function anime()
    {
        $searchTerm = new Anime();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function battleRoyale()
    {
        $searchTerm = new BattleRoyale();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function card()
    {
        $searchTerm = new Card();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function fantasy()
    {
        $searchTerm = new Fantasy();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function fighting()
    {
        $searchTerm = new Fighting();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function firstPerson()
    {
        $searchTerm = new FirstPerson();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function flight()
    {
        $searchTerm = new Flight();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function horror()
    {
        $searchTerm = new Horror();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function lowSpecifications()
    {
        $searchTerm = new LowSpecifications();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function martialArts()
    {
        $searchTerm = new MartialArts();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function massivelyMultiplayerOnline()
    {
        $searchTerm = new MassivelyMultiplayerOnline();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function massivelyMultiplayerOnlineFirstPerson()
    {
        $searchTerm = new MassivelyMultiplayerOnlineFirstPersonShooter();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function massivelyMultiplayerOnlineRealTimeStrategy()
    {
        $searchTerm = new MassivelyMultiplayerOnlineRealTimeStrategy();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function massivelyMultiplayerOnlineRolePlayingGame()
    {
        $searchTerm = new MassivelyMultiplayerOnlineRolePlayingGame();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function massivelyMultiplayerOnlineThirdPersonShooter()
    {
        $searchTerm = new MassivelyMultiplayerOnlineThirdPersonShooter();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function military()
    {
        $searchTerm = new Military();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function multiplayerOnlineBattleArena()
    {
        $searchTerm = new MultiplayerOnlineBattleArena();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function openWorld()
    {
        $searchTerm = new OpenWorld();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function permadeath()
    {
        $searchTerm = new Permadeath();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function pixel()
    {
        $searchTerm = new Pixel();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function playerVersusEnvironment()
    {
        $searchTerm = new PlayerVersusEnvironment();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function playerVersusPlayer()
    {
        $searchTerm = new PlayerVersusPlayer();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function racing()
    {
        $searchTerm = new Racing();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function sailing()
    {
        $searchTerm = new Sailing();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function sandbox()
    {
        $searchTerm = new Sandbox();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function scienceFiction()
    {
        $searchTerm = new ScienceFiction();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function shooter()
    {
        $searchTerm = new Shooter();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function sideScroller()
    {
        $searchTerm = new SideScroller();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function social()
    {
        $searchTerm = new Social();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function space()
    {
        $searchTerm = new Space();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function sports()
    {
        $searchTerm = new Sports();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function strategy()
    {
        $searchTerm = new Strategy();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function superhero()
    {
        $searchTerm = new Superhero();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function survival()
    {
        $searchTerm = new Survival();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function tank()
    {
        $searchTerm = new Tank();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function thirdPerson()
    {
        $searchTerm = new ThirdPerson();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function threeDimensions()
    {
        $searchTerm = new ThreeDimensions();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function topDown()
    {
        $searchTerm = new TopDown();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function towerDefense()
    {
        $searchTerm = new TowerDefense();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function turnBased()
    {
        $searchTerm = new TurnBased();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function twoDimensions()
    {
        $searchTerm = new TwoDimensions();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function voxel()
    {
        $searchTerm = new Voxel();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }

    /** @test */
    public function zombie()
    {
        $searchTerm = new Zombie();
        $filter = new CategoryFilter($searchTerm);

        $this->assertEquals($searchTerm->getValue(), $filter->getValue());
    }
}
