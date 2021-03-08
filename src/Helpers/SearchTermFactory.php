<?php
declare(strict_types=1);

namespace FreeToGame\Helpers;

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
use FreeToGame\Filters\SearchTerms\SearchTerm;
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

class SearchTermFactory
{
    public static function getSearchTerm(string $tag): ?SearchTerm
    {
        if ($tag === 'action') {
            return new Action();
        } elseif ($tag === 'action-rpg') {
            return new ActionRolePlayingGame();
        } elseif ($tag === 'anime') {
            return new Anime();
        } elseif ($tag === 'battle-royale') {
            return new BattleRoyale();
        } elseif ($tag === 'card') {
            return new Card();
        } elseif ($tag === 'fantasy') {
            return new Fantasy();
        } elseif ($tag === 'fighting') {
            return new Fighting();
        } elseif ($tag === 'first-person') {
            return new FirstPerson();
        } elseif ($tag === 'flight') {
            return new Flight();
        } elseif ($tag === 'horror') {
            return new Horror();
        } elseif ($tag === 'low-specs') {
            return new LowSpecifications();
        } elseif ($tag === 'martial-arts') {
            return new MartialArts();
        } elseif ($tag === 'mmo') {
            return new MassivelyMultiplayerOnline();
        } elseif ($tag === 'mmofps') {
            return new MassivelyMultiplayerOnlineFirstPersonShooter();
        } elseif ($tag === 'mmorts') {
            return new MassivelyMultiplayerOnlineRealTimeStrategy();
        } elseif ($tag === 'mmorpg') {
            return new MassivelyMultiplayerOnlineRolePlayingGame();
        } elseif ($tag === 'mmotps') {
            return new MassivelyMultiplayerOnlineThirdPersonShooter();
        } elseif ($tag === 'military') {
            return new Military();
        } elseif ($tag === 'multiplayer-online-battle-arena') {
            return new MultiplayerOnlineBattleArena();
        } elseif ($tag === 'open-world') {
            return new OpenWorld();
        } elseif ($tag === 'permadeath') {
            return new Permadeath();
        } elseif ($tag === 'pixel') {
            return new Pixel();
        } elseif ($tag === 'pve') {
            return new PlayerVersusEnvironment();
        } elseif ($tag === 'pvp') {
            return new PlayerVersusPlayer();
        } elseif ($tag === 'racing') {
            return new Racing();
        } elseif ($tag === 'sailing') {
            return new Sailing();
        } elseif ($tag === 'sandbox') {
            return new Sandbox();
        } elseif ($tag === 'sci-fi') {
            return new ScienceFiction();
        } elseif ($tag === 'shooter') {
            return new Shooter();
        } elseif ($tag === 'side-scroller') {
            return new SideScroller();
        } elseif ($tag === 'social') {
            return new Social();
        } elseif ($tag === 'space') {
            return new Space();
        } elseif ($tag === 'sports') {
            return new Sports();
        } elseif ($tag === 'strategy') {
            return new Strategy();
        } elseif ($tag === 'superhero') {
            return new Superhero();
        } elseif ($tag === 'survival') {
            return new Survival();
        } elseif ($tag === 'tank') {
            return new Tank();
        } elseif ($tag === 'third-person') {
            return new ThirdPerson();
        } elseif ($tag === '3D') {
            return new ThreeDimensions();
        } elseif ($tag === 'top-down') {
            return new TopDown();
        } elseif ($tag === 'tower-defense') {
            return new TowerDefense();
        } elseif ($tag === 'turn-based') {
            return new TurnBased();
        } elseif ($tag === '2D') {
            return new TwoDimensions();
        } elseif ($tag === 'voxel') {
            return new Voxel();
        } elseif ($tag === 'zombie') {
            return new Zombie();
        }
        return null;
    }

    public static function getSearchTerms(array $tags): array
    {
        $terms = [];

        foreach ($tags as $tag) {
            $searchTerm = self::getSearchTerm($tag);

            if (!$searchTerm) {
                continue;
            }

            $terms[] = $searchTerm;
        }

        return $terms;
    }
}
