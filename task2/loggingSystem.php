<?php
interface loggerInterface
{
    public function logMethod(string $message, string $level);
}

class databaseLogSystem implements loggerInterface
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function logMethod(string $message, string $level)
    {
        $stmt = $this->pdo->prepare("INSERT INTO log (message, level) VALUES (?, ?)");
        $stmt->execute([$message, $level]);
    }
}

class telegramLogSystem implements loggerInterface
{
    private telegramClient $telegramClient;
    public function __construct($telegramClient)
    {
        $this->telegramClient = $telegramClient;
    }

    public function logMethod(string $message, string $level)
    {
        $this->sendMessage($message, $level);
    }

    public function sendMessage($reqMessage, $reqLevel)
    {
        echo "The message send to the receiver: " . $reqMessage . "<br>";

        echo "The level of the message is: " . $reqLevel . "<br>";
    }
}

class telegramClient
{
    private $telegramToken;
    public function __construct($telegramToken)
    {
        $this->telegramToken = $telegramToken;
    }
}

$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
$databaseLogger = new databaseLogSystem($pdo);


$databaseLogger->logMethod("This is a database log message", "error");

$telegramLogger = new telegramLogSystem(new telegramClient('User_telegram_token'));
$telegramLogger->logMethod("This is a Telegram log message", "warning");
