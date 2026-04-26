@props(['stats' => [], 'columns' => 4, 'trend' => true])

<div class="ui-stats-grid" style="--stats-columns: {{ $columns }}">
    @foreach($stats as $stat)
    <div class="stat-item">
        @if(isset($stat['icon']))
        <div class="stat-icon">{!! $stat['icon'] !!}</div>
        @endif
        <div class="stat-value">{{ $stat['value'] }}</div>
        <div class="stat-label">{{ $stat['label'] }}</div>
        @if($trend && isset($stat['change']))
        <span class="stat-change {{ $stat['change'] >= 0 ? 'positive' : 'negative' }}">
            {{ $stat['change'] >= 0 ? '+' : '' }}{{ $stat['change'] }}%
        </span>
        @endif
    </div>
    @endforeach
</div>