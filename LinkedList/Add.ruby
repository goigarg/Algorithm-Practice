class Node
    attr_accessor :next
    attr_reader :data
    def initialize data
        @data = data
        @next = nil
    end
end

class LinkedList
    def initialize
        @head = nil
    end
    def add data
        temp = @head
        @head = Node.new(data)
        @head.next = temp
    end
end