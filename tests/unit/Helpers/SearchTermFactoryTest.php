<?php
declare(strict_types=1);

namespace unit\Helpers;

use Codeception\Test\Unit;
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
use FreeToGame\Helpers\SearchTermFactory;

class SearchTermFactoryTest extends Unit
{
    /** @test */
    public function tag()
    {
        $this->assertInstanceOf(Action::class, SearchTermFactory::getSearchTerm('action'));
        $this->assertInstanceOf(ActionRolePlayingGame::class, SearchTermFactory::getSearchTerm('action-rpg'));
        $this->assertInstanceOf(Anime::class, SearchTermFactory::getSearchTerm('anime'));
        $this->assertInstanceOf(BattleRoyale::class, SearchTermFactory::getSearchTerm('battle-royale'));
        $this->assertInstanceOf(Card::class, SearchTermFactory::getSearchTerm('card'));
        $this->assertInstanceOf(Fantasy::class, SearchTermFactory::getSearchTerm('fantasy'));
        $this->assertInstanceOf(Fighting::class, SearchTermFactory::getSearchTerm('fighting'));
        $this->assertInstanceOf(FirstPerson::class, SearchTermFactory::getSearchTerm('first-person'));
        $this->assertInstanceOf(Flight::class, SearchTermFactory::getSearchTerm('flight'));
        $this->assertInstanceOf(Horror::class, SearchTermFactory::getSearchTerm('horror'));
        $this->assertInstanceOf(LowSpecifications::class, SearchTermFactory::getSearchTerm('low-specs'));
        $this->assertInstanceOf(MartialArts::class, SearchTermFactory::getSearchTerm('martial-arts'));
        $this->assertInstanceOf(MassivelyMultiplayerOnline::class, SearchTermFactory::getSearchTerm('mmo'));
        $this->assertInstanceOf(MassivelyMultiplayerOnlineFirstPersonShooter::class, SearchTermFactory::getSearchTerm('mmofps'));
        $this->assertInstanceOf(MassivelyMultiplayerOnlineRealTimeStrategy::class, SearchTermFactory::getSearchTerm('mmorts'));
        $this->assertInstanceOf(MassivelyMultiplayerOnlineRolePlayingGame::class, SearchTermFactory::getSearchTerm('mmorpg'));
        $this->assertInstanceOf(MassivelyMultiplayerOnlineThirdPersonShooter::class, SearchTermFactory::getSearchTerm('mmotps'));
        $this->assertInstanceOf(Military::class, SearchTermFactory::getSearchTerm('military'));
        $this->assertInstanceOf(MultiplayerOnlineBattleArena::class, SearchTermFactory::getSearchTerm('multiplayer-online-battle-arena'));
        $this->assertInstanceOf(OpenWorld::class, SearchTermFactory::getSearchTerm('open-world'));
        $this->assertInstanceOf(Permadeath::class, SearchTermFactory::getSearchTerm('permadeath'));
        $this->assertInstanceOf(Pixel::class, SearchTermFactory::getSearchTerm('pixel'));
        $this->assertInstanceOf(PlayerVersusEnvironment::class, SearchTermFactory::getSearchTerm('pve'));
        $this->assertInstanceOf(PlayerVersusPlayer::class, SearchTermFactory::getSearchTerm('pvp'));
        $this->assertInstanceOf(Racing::class, SearchTermFactory::getSearchTerm('racing'));
        $this->assertInstanceOf(Sailing::class, SearchTermFactory::getSearchTerm('sailing'));
        $this->assertInstanceOf(Sandbox::class, SearchTermFactory::getSearchTerm('sandbox'));
        $this->assertInstanceOf(ScienceFiction::class, SearchTermFactory::getSearchTerm('sci-fi'));
        $this->assertInstanceOf(Shooter::class, SearchTermFactory::getSearchTerm('shooter'));
        $this->assertInstanceOf(SideScroller::class, SearchTermFactory::getSearchTerm('side-scroller'));
        $this->assertInstanceOf(Social::class, SearchTermFactory::getSearchTerm('social'));
        $this->assertInstanceOf(Space::class, SearchTermFactory::getSearchTerm('space'));
        $this->assertInstanceOf(Sports::class, SearchTermFactory::getSearchTerm('sports'));
        $this->assertInstanceOf(Strategy::class, SearchTermFactory::getSearchTerm('strategy'));
        $this->assertInstanceOf(Superhero::class, SearchTermFactory::getSearchTerm('superhero'));
        $this->assertInstanceOf(Survival::class, SearchTermFactory::getSearchTerm('survival'));
        $this->assertInstanceOf(Tank::class, SearchTermFactory::getSearchTerm('tank'));
        $this->assertInstanceOf(ThirdPerson::class, SearchTermFactory::getSearchTerm('third-person'));
        $this->assertInstanceOf(ThreeDimensions::class, SearchTermFactory::getSearchTerm('3D'));
        $this->assertInstanceOf(TopDown::class, SearchTermFactory::getSearchTerm('top-down'));
        $this->assertInstanceOf(TowerDefense::class, SearchTermFactory::getSearchTerm('tower-defense'));
        $this->assertInstanceOf(TurnBased::class, SearchTermFactory::getSearchTerm('turn-based'));
        $this->assertInstanceOf(TwoDimensions::class, SearchTermFactory::getSearchTerm('2D'));
        $this->assertInstanceOf(Voxel::class, SearchTermFactory::getSearchTerm('voxel'));
        $this->assertInstanceOf(Zombie::class, SearchTermFactory::getSearchTerm('zombie'));

        $this->assertNull(SearchTermFactory::getSearchTerm('dummy-tag'));
    }

    /** @test */
    public function tags()
    {
        $tags = ['dummy-tag', 'shooter', 'racing'];

        $searchTerms = SearchTermFactory::getSearchTerms($tags);

        $this->assertIsArray($searchTerms);
    }
}
