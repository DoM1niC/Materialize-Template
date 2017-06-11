  <div id="gameserver" class="modal modal-fixed-footer modal-middle">
    <div class="modal-content">
      <h4><i class="fa fa-gamepad" aria-hidden="true"></i> Gameserver</h4>
	<center><h5>IP: 24.134.17.209:7777</h5>
<?php
	require __DIR__ . '/../SourceQuery/bootstrap.php';

	use xPaw\SourceQuery\SourceQuery;
	
	// Edit this ->
	define( 'SQ_SERVER_ADDR', '192.168.0.7' );
	define( 'SQ_SERVER_PORT', 31315 );
	define( 'SQ_TIMEOUT',     3 );
	define( 'SQ_ENGINE',      SourceQuery::SOURCE );
	// Edit this <-
	
	$Timer = MicroTime( true );
	
	$Query = new SourceQuery( );
	
	$Info    = Array( );
	$Players = Array( );
	
	try
	{
		$Query->Connect( SQ_SERVER_ADDR, SQ_SERVER_PORT, SQ_TIMEOUT, SQ_ENGINE );		
		$Info    = $Query->GetInfo( );
		$Players = $Query->GetPlayers( );
	}
	catch( Exception $e )
	{
		$Exception = $e;
	}
	
	$Query->Disconnect( );
	
	$Timer = Number_Format( MicroTime( true ) - $Timer, 4, '.', '' );
?>
		
<?php if( isset( $Exception ) ): ?>
<?php else: ?>
		<div class="row">
			<div class="col 12 m6">
				<table class="striped">
					<thead>
						<tr>
							<th>Server Info</th>
							<th><span class="white-text badge <?php echo $Timer > 1.0 ? 'red' : 'green'; ?>"><?php echo $Timer; ?>s</span></th>
						</tr>
					</thead>
					<tbody>
<?php if( Is_Array( $Info ) ): ?>
<?php foreach( $Info as $InfoKey => $InfoValue ): ?>
						<tr>
							<td><?php echo htmlspecialchars( $InfoKey ); ?></td>
							<td><?php
	if( Is_Array( $InfoValue ) )
	{
		echo "<pre>";
		print_r( $InfoValue );
		echo "</pre>";
	}
	else
	{
		if( $InfoValue === true )
		{
			echo 'true';
		}
		else if( $InfoValue === false )
		{
			echo 'false';
		}
		else
		{
			echo htmlspecialchars( $InfoValue );
		}
	}
?></td>
						</tr>
<?php endforeach; ?>
<?php else: ?>
						<tr>
							<td colspan="2">No information received</td>
						</tr>
<?php endif; ?>
					</tbody>
				</table>
			</div>
			<div class="col 12 m6">
				<table class="">
					<thead>
						<tr>
							<th>Player</th>
							<th>Frags</th>
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
<?php if( !empty( $Players ) ): ?>
<?php foreach( $Players as $Player ): ?>
						<tr>
							<td><?php echo htmlspecialchars( $Player[ 'Name' ] ); ?></td>
							<td><?php echo $Player[ 'Frags' ]; ?></td>
							<td><?php echo $Player[ 'TimeF' ]; ?></td>
						</tr>
<?php endforeach; ?>
<?php else: ?>
						<tr>
							<td colspan="3">No players received</td>
						</tr>
<?php endif; ?>
					</tbody>
				</table>
			</div>

<?php endif; ?>
	</div></div>
    <div class="modal-footer">
      <a href="#top" class="modal-action modal-close waves-effect waves-green btn-flat ">Schließen</a>
    </div>
  </div>
          